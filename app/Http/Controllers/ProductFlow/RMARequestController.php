<?php

namespace App\Http\Controllers\ProductFlow;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductFlow\ProductFlowController;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\RMA;
use View;
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
        return view('productflow/rma/index');
    }

    /**
     * Present RMA create view with an asset pre-select or blank
     *  
     */
    public function create (Request $request)
    {
        $this->authorize('create', RMA::class);
        $view = view('productflow/rma/edit')->with('item', new RMA)->with('rma_status', RMA::getStatusOptions());

        $asset = null;

        if($asset = Asset::find($request->input('asset_id'))) {
            $asset->asset_id = $asset->id;
            $view->with('asset', $asset);
        }
        return $view;
    }

    /**
     * Store new asset
     * 
     */
    public function store (Request $request)
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
        $rma->user_id = Auth::id();
        $rma->notes = $request->input('notes');
        $rma->technician = $request->input('technician');
        $rma->start_date = Carbon::now()->isoFormat('Y-MM-DD');

        // Save RMA
        if ($rma->save()) {
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
    public function edit ($rma_id = null)
    {
        $this->authorize('update', RMA::class);
        if ( !$rma = RMA::find($rma_id)) {
            // Let's add some real logic here to gracefully redirect with an error.
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
     * Update the RMA
     * 
     */

    public function update (Request $request, $id = null)
    {
        if(!$rma = RMA::find($id)) {
            return redirect()->back()->with('error', trans('admin/rma/message.not_found'));
        }

        $this->authorize($rma);

        $rules = [];
        

        if ($request->input('rma_status') == "RMA Declined") {
            $rules = ['completion_date' => 'required'];
        }

        if ($request->input('rma_status') != "Pending" && $request->input('rma_status') != "RMA Declined") {
            $rules = ['rma_number' => 'required', 'case_number' => 'required'];
        }

        if ($request->input('rma_status') == "RMA Complete") {
            $rules = ['rma_number' => 'required', 'case_number' => 'required', 'completion_date'=> 'required'];
        }

        $request->validate($rules);

        $rma->new_asset_id = null;
        if ($request->filled('new_asset_id')) {
            $rma->new_asset_id = $request->new_asset_id;
        }

        if ($request->filled('with_admin')) {
            $rma->with_admin = $request->input('with_admin');
        }

        if ($request->filled('warranty_expired')) {
            $rma->warranty_expired = $request->input('warranty_expired');
        }

        if ($request->filled('completion_date')) {
            $rma->completion_date = $request->input('completion_date');
        }

        if ($request->filled('repair_cost')) {
            $rma->repair_cost = $request->input('repair_cost');
        }

        $rma->asset_id = $request->input('asset_id');
        $rma->notes = $request->input('notes');
        $rma->technician = $request->input('technician');
        $rma->status = $request->input('rma_status');
        $rma->start_date = $request->input('start_date');
        
        if ($rma->save()) {
            $rma->updateAsset();
            return redirect()->route('rma.index')->with('success', trans('admin/rma/message.update.success'));
        }

        return redirect()->back()->withInput()->withErrors($rma->getErrors());

    }

    /**
     * Display an RMA with all of it's BEAUTIFUL information
     */

    public function show(Request $request, $id = null)
    {
        dd(RMA::find($id));
    }  

    /**
     * "One does not simply destroy an RMA request"
     * Need I say more??
     * 
     * Destroys RMA
     * 
     */
    public function destroy(RMA $id)
    {
        dd($id);
    }
}
