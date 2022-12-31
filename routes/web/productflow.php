<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceivingController;


Route::group(['prefix' => 'productflow', 'middleware' => ['auth']], function () {
    Route::get('receiving', [ReceivingController::class, 'index'])->name('receiving');
    Route::get('show', [ReceivingController::class, 'show'])->name('productflow.receiving.show');
});


?>