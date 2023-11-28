<?php

namespace App\Http\Controllers\ProductFlow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RMARequestController extends Controller
{
    public function index()
    {
        return view('productflow/rma/index');
    }

    public function create ()
    {
        return "hello from RMA Create";
    }
}
