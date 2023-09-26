<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Auth;
use App\Models\Asset;
use App\Models\Company;
use App\Models\Statuslabel;
use App\Models\Accessory;
use App\Models\AssetModel;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\Setting;

class ProductFlowController extends Controller
{
    public function index()
    {
        return view('productflow/receiving');
    }

    public function show(Request $request)
    {
        $accessory = Accessory::where('model_number', '=', $request->receiveParts)->get();

        $upc = Accessory::where('upc', '=', $request->receiveParts)->get();

        $model = AssetModel::where('model_number', '=', $request->receiveParts)->get();

        if ($accessory->count() > 0) {
            $result = $accessory[0];
            return response()->json(Helper::formatStandardApiResponse('success', $result, "accessory"));
        }

        if ($upc->count() > 0) {
            $result = $upc[0];
            return response()->json(Helper::formatStandardApiResponse('success', $result, "accessory"));
        }

        if ($model->count() > 0) {
            $result = $model[0];
            return response()->json(Helper::formatStandardApiResponse('success', $result, "asset"));
        }


        // Redirect if model is not found
        if ($request->receiveParts == "0") {
            return redirect()->route('productflow.receiving')->with('warning', "Model not found. Please click 'New' to add the model.")->with('model', $model);
        }
    }

    /**
     * Creates new asset
     * @param Request
     */
    public function store(Request $request)
    {
        $this->authorize(Asset::class);
        $model_number = $request->input('model_number');
        $model = AssetModel::where('model_number', '=', $model_number)->get()[0];
        $serialNumber = $request->input('serial_number');

        $asset = new Asset();

        // Auto set MAC address and name if device is an Axis product
        if(Manufacturer::find($model->manufacturer_id)->name == "Axis") {
            if(mb_strlen($serialNumber) == 12) {
                $mac = preg_replace('~..(?!$)~', '\0-', str_replace(".", "", $serialNumber));
                $asset->_snipeit_mac_address_1 = $mac;
            } else {
                return redirect()->route('productflow.receiving')->with('warning', "Axis Serial Number is not valid. Pleas verify that you have scanned the correct Bar Code.");
            }
            
            $asset->name                = $model->name . " " . $serialNumber;
        }

        $asset->asset_tag               = $request->input('asset_tag');
        $asset->company_id              = Company::select('id')->where('name', '=', 'ETI')->get()[0]->id; // Hardcoded to ETI
        $asset->model_id                = AssetModel::select('id')->where('model_number', '=', $request->input('model_number'))->get()[0]->id;
        $asset->serial                  = $serialNumber;
        $asset->user_id                 = Auth::id();
        $asset->archived                = '0';
        $asset->physical                = '1';
        $asset->depreciate              = '0';
        $asset->status_id               = Statuslabel::select('id')->where('name', '=', 'stock')->get()[0]->id;
        $asset->requestable             = 0;

        if ($asset->save()) {
            /* return view('hardware/labels')
                ->with('assets', Asset::where('asset_tag', '=', $request->input('asset_tag'))->get())
                ->with('settings', Setting::getSettings())
                ->with('bulkedit', false)
                ->with('count', 0); */
            return redirect()->route('productflow.receiving')->with('success', "Successfully added $model_number to stock!");
        }
        return redirect()->back()->withInput()->withErrors($asset->getErrors());
    }

    // Update Accessory Data
    public function update(Request $request) {
        $accessory = Accessory::find($request->input('accessory_id'));
        $accessory_name = $accessory->name;

        $qty = $accessory->qty + intval($request->input('accessory_qty'));
        
        if (is_null($accessory)) {
            return redirect()->route('productflow.receiving')->with('warning', "Accessory not found. Please click 'New Accessory' to add the accessory.");
        }

        $accessory->qty = $qty;
        if ($accessory->save()) {
            return redirect()->route('productflow.receiving')->with('success', "Successfully updated $accessory_name to $qty!");
        }
        return redirect()->back()->withInput()->withErrors($accessory->getErrors());
    }
}
