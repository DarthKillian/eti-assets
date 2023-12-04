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
        $view = View::make('productflow/rma/edit')->with('item', new RMA)->with('status_options', RMA::getStatusOptions());
        if($request->filled('asset_id')) {
            $selected_asset = Asset::find($request->input('asset_id'));
            $view->with('selected_asset', $selected_asset);
        }
        return $view;
    }

    public function store (Request $request)
    {
        $this->authorize('update', RMA::class);
        $rma = new RMA();
        $rma->asset_id = $request->input('asset_id');

        if ($rma->save()) {
            dd("saved");
        }

        return redirect()->back()->withInput()->withErrors($rma->getErrors());
    }

    public function show(Request $request, $id = null)
    {
        dd(RMA::find($id));
    }

    public function edit (Request $request)
    {
        dd($request->id);
    }

    public function destroy(RMA $id)
    {
        dd($id);
    }
}
