<?php

namespace App\Http\Controllers;

use App\Models\AssetModel;

use Illuminate\Http\Request;

class ReceivingController extends Controller
{
    public function index() {
        return view('productflow/receiving');
    }

    public function show(Request $request) {
        // return $request->receiveParts;
        $model = AssetModel::where('model_number', '=', $request->receiveParts);
        return $model->get();
    }
}
