<?php

namespace App\Http\Controllers\ProductFlow;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\AssetMaintenance;
use Illuminate\Http\Request;
use App\Models\RMA;
use Illuminate\Support\Facades\Notification;
use App\Notifications\RMARequest;
use Auth;
use Carbon\Carbon;

class RMARequestController extends Controller
{
    /**
     * Load RMA Request index table view
     * 
     */
    public function index()
    {
        $this->authorize('view', RMA::class);
        return view('productflow/rma/index');
    }

    /**
     * Present RMA create view with an asset pre-select or blank
     *  
     */
    public function create(Request $request)
    {
        $this->authorize('create', RMA::class);
        $view = view('productflow/rma/edit')->with('item', new RMA)->with('rma_status', RMA::getStatusOptions());

        $asset = null;

        if ($asset = Asset::find($request->input('asset_id'))) {
            $asset->asset_id = $asset->id;
            $view->with('asset', $asset);
        }
        return $view;
    }

    /**
     * Store new asset
     * 
     */
    public function store(Request $request)
    {
        $this->authorize('update', RMA::class);

        // Check if an open RMA already exists for the selected asset. We don't want more than one RMA open for the same asset.
        // Should I add another constraint to this to check for the RMA status being completed as well???
        $assetID = $request->input('asset_id');
        $currentRMA = RMA::checkRMAComplete($assetID)->get();
        if (count($currentRMA)) {
            return redirect()->back()->withInput()->with('warning', trans('admin/rma/message.rma_exists'));
        }

        // Prepare new RMA
        $rma = new RMA();
        $rma->asset_id = $request->input('asset_id');
        $rma->created_by = Auth::id();
        $rma->notes = $request->input('notes');
        $rma->contact = $request->input('contact');
        $rma->start_date = Carbon::now()->isoFormat('Y-MM-DD');

        if (!$rma->asset->availableForCheckout()) {
            return redirect()->back()->with('warning', trans('admin/rma/message.create.asset_checkedout'));
        }

        // Save RMA
        if ($rma->save() && $rma->updateAsset(null, null)) {
            // Send email notification (hardcoded for now)
            $recipients = ['jvanvolkenburgh@etikc.com', 'lreinoehl@etikc.com'];
            if ($request->filled('notify')) {
                Notification::route('mail', $recipients)->notify(new RMARequest($rma));
            }

            return redirect()->route('rma.index')->with('success', trans('admin/rma/message.create.success'));
        }

        // Inform the user they have messed up royally...
        return redirect()->back()->withInput()->withErrors($rma->getErrors());
    }

    /**
     * Present edit form
     * 
     * TODO: Need to make some real logic if the RMA is not found
     */
    public function edit($rma_id = null)
    {
        $this->authorize('update', RMA::class);
        if (!$rma = RMA::find($rma_id)) {
            return redirect()->route('rma.index')->with('error', trans('admin/rma/message.not_found'));
        }

        /**
         * 
         * Just a quick fail safe to set the status default to "Pending".
         * This should already be handled above... 
         * But if we somehow oopsie it upstairs, we want to make sure it's not null going to the edit form.
         */
        if ($rma->status == null) {
            $rma->status = "Pending";
        }

        return view('productflow/rma/edit')->with('rma_status', RMA::getStatusOptions())->with('item', $rma);
    }

    /**
     * Display an RMA with all of it's BEAUTIFUL information
     */

    public function show($id = null)
    {
        $rma = RMA::find($id);

        $this->authorize('view', $rma);

        if (isset($rma)) {
            return view('productflow.rma.view', compact('rma'));
        }

        return redirect()->route('rma.index')->with('error', trans('admin/rma/message.not_found'));
    }


    /**
     * Update the RMA
     * 
     */

    public function update(Request $request, $id = null)
    {
        if (!$rma = RMA::find($id)) {
            return redirect()->back()->with('error', trans('admin/rma/message.not_found'));
        }

        $this->authorize($rma);

        $rules = [];

        $oldRMAStatus = $rma->status;
        $oldAssetStatus = $rma->asset->assetStatus->get()[0]->id;

        // Extra validation rules that are dynamic based on user entry

        if ($request->input('rma_status') == "RMA Declined") {
            $rules = ['completion_date' => 'required'];
        }

        if ($request->input('rma_status') != "Pending" && $request->input('rma_status') != "RMA Declined") {
            $rules = ['rma_number' => 'required', 'case_number' => 'required'];
        }

        if ($request->input('rma_status') == "RMA Complete") {
            $rules = ['rma_number' => 'required', 'case_number' => 'required', 'completion_date' => 'required'];
        }

        if ($oldRMAStatus == "RMA Approved | Advanced Replacement" && $request->input('rma_status') == "RMA Complete") {
            $rules = ['rma_number' => 'required', 'case_number' => 'required', 'completion_date' => 'required', 'new_asset_id' => 'required'];
        }

        $request->validate($rules);

        $rma->new_asset_id = null;
        if ($request->filled('new_asset_id')) {
            $rma->new_asset_id = $request->new_asset_id;
        }

        $rma->with_admin = 0;
        if ($request->filled('with_admin')) {
            $rma->with_admin = 1;
        }

        $rma->warranty_expired = 0;
        if ($request->filled('warranty_expired')) {
            $rma->warranty_expired = 1;
        }

        if ($request->filled('completion_date')) {
            $rma->completion_date = $request->input('completion_date');
        }

        if ($request->filled('repair_cost')) {
            $rma->repair_cost = $request->input('repair_cost');
        }

        $rma->asset_id = $request->input('asset_id');
        $rma->rma_number = $request->input('rma_number');
        $rma->case_number = $request->input('case_number');
        $rma->notes = $request->input('notes');
        $rma->contact = $request->input('contact');
        $rma->status = $request->input('rma_status');
        $rma->start_date = $request->input('start_date');

        // Update the asset maintenance if it exists
        if (isset($rma->asset_maintenance_id)) {
            if (!$rma->setAssetMaintenance("update")) {
                return redirect()->back()->with('error', "There was an error in the auto update of the asset maintenance. The maintenance either doesn't exist or the was an internal server error.");
            }
        }

        // If the RMA is just updated with let's say... just the notes field, we aren't updating the asset at all or anything else like that
        // So let's just save the RMA and return with a nice message
        if ($oldRMAStatus == "Pending" && $request->input('rma_status') == "Pending")  {
            if ($rma->save()) {
                return redirect()->route('rma.index')->with('success', trans('admin/rma/message.update.success'));
            }
            return redirect()->back()->withInput()->withErrors($rma->getErrors());

        }

        // This assumes that the status gets updated and the RMA needs to update the asset and create an aset maintenance
        if ($oldRMAStatus == "Pending" && !isset($rma->asset_maintenance_id) && $request->input('rma_status') != "RMA Declined") {
            if (!$rma->setAssetMaintenance("create")) {
                return redirect()->back()->with('error', "There was an error in the auto creation of the asset maintenance");
            }
        }

        // Save RMA and update the asset if needed.
        if ($rma->save() && $rma->updateAsset($oldRMAStatus, $oldAssetStatus)) {
            return redirect()->route('rma.index')->with('success', trans('admin/rma/message.update.success'));
        }

        return redirect()->back()->withInput()->withErrors($rma->getErrors());
    }

    /**
     * "One does not simply destroy an RMA request"
     * Need I say more??
     * 
     * Destroys RMA
     * 
     */
    public function destroy($id)
    {
        if (is_null($rma = RMA::find($id))) {
            return redirect()->route('rma.index')->with('error', trans('admin/rma/message.not_found'));
        }
        $this->authorize('delete', $rma);

        // Delete asset maintenance with the RMA
        if ($assetMaintenance = AssetMaintenance::find($rma->asset_maintenance_id)) {
            $assetMaintenance->delete();
        }

        // Delete RMA
        if ($rma->delete() ){
            return redirect()->route('rma.index')->with('success', trans('admin/rma/message.delete.success'));
        }
    }
}
