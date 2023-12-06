<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductFlow\RMARequestController;

Route::group(['prefix' => 'productflow/rma', 'middleware' => ['auth']], function () {
    Route::get('/', [RMARequestController::class, 'index'])->name('rma.index');

    Route::get('create', [RMARequestController::class, 'create'])->name('rma.create');

    Route::post('store', [RMARequestController::class, 'store'])->name('rma.store');

    Route::get('{id}/edit', [RMARequestController::class, 'edit'])->name('rma.edit');

    Route::get('{id}', [RMARequestController::class, 'show'])->name('rma.show');

    Route::put('{id}/update', [RMARequestController::class, 'update'])->name('rma.update');

    Route::delete('{id}', [RMARequestController::class, 'destroy'])->name('rma.destroy');
});
