<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use App\Models\AssetModel;

use Illuminate\Http\Request;

class ProductFlowController extends Controller
{
    public function index() {
        return view('productflow/receiving');
    }

    public function show(Request $request) {
        // return $request->receiveParts;
        $model = AssetModel::where('model_number', '=', $request->receiveParts)->get();
        $accessory = Accessory::where('model_number', '=', $request->receiveParts)->get();
        if($model->count() > 0) {
            $result = $model;
            return $result;
        }
        if($accessory->count() > 0) {
            $result = $accessory;
            return $result;
        }

        return $result = false;
    }
}
