<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductFlow\RMARequestController;

Route::group(['prefix' => 'productflow', 'middleware' => ['auth']], function () {
    Route::get('rma', [RMARequestController::class, 'index'])->name('rma.index');

    Route::get('rma/create', [RMARequestController::class, 'create'])->name('rma.create');
});
