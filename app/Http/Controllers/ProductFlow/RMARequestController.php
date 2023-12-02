<?php

namespace App\Http\Controllers\ProductFlow;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductFlow\ProductFlowController;
use Illuminate\Http\Request;
use App\Models\RMA;

class RMARequestController extends ProductFlowController
{
    public function index()
    {
        return view('productflow/rma/index');
    }

    public function create ()
    {
        return "hello from RMA Create";
    }

    public function edit (RMA $rma)
    {
        dd($rma);
    }
}
