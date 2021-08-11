<?php

use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['theme:customer', 'auth'])->name('customer.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('order/create/{id}', [OrderController::class, 'create'])->name('order.create');
    Route::resource('/order', OrderController::class);
});
