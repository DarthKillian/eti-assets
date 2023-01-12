<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductFlowController;

Route::group(['prefix' => 'productflow', 'middleware' => ['auth']], function () {
    Route::get('receiving', [ProductFlowController::class, 'index'])->name('productflow.receiving');
    Route::get('show', [ProductFlowController::class, 'show'])->name('productflow.receiving.show');
});
