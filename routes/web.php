<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
