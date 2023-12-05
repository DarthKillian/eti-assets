<?php

namespace App\Http\Controllers\ProductFlow;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductFlow\ProductFlowController;
use App\Models\Asset;
use Illuminate\Http\Request;
use App\Models\RMA;
use View;
use Auth;

class RMARequestController extends Controller
{
    public function index()
    {
        return view('productflow/rma/index');
    }

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

    public function store (Request $request)
    {
        $this->authorize('update', RMA::class);
        $rma = new RMA();
        $rma->asset_id = $request->input('asset_id');

        dd($request->all());

        if ($rma->save()) {
            dd("saved");
        }

        return redirect()->back()->withInput()->withErrors($rma->getErrors());
    }

    public function edit ($rma_id = null)
    {
        $this->authorize('update', RMA::class);
        if ( !$rma = RMA::find($rma_id)) {
            // Let's add some real logic here to gracefully redirect with an error.
            return "nothing found";
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

    public function show(Request $request, $id = null)
    {
        dd(RMA::find($id));
    }  

    public function destroy(RMA $id)
    {
        dd($id);
    }
}
