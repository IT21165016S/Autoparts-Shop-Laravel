<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = []; 
    $categories = [];
    $cars = [];

    return view('frontend.home', compact('products', 'categories', 'cars'));
});

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

// routes/web.php
require __DIR__.'/admin.php';
