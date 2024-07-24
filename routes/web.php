<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/layout', function () {
//    return view('layout');
//});

Route::resource('products', ProductController::class);
//Route::get('/products', function () {
//    return view('products.products');
//});