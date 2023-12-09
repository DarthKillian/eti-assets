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
        $currentRMA = RMA::where('asset_id', $assetID)->where('completion_date', null)->get();
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

        }

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
