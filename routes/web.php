<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin-dashboard', function () {
    return view('backend.dashboard.index');
});

Route::get('/signin', function () {
    return view('frontend.Signin');
});


Route::get('/signup', function () {
    return view('frontend.Signup');
});



Route::get('/', function () {
    return view('frontend.Home.home');
});


Route::get('/all-products', function () {
    return view('frontend.Products.allProducts');
});


Route::get('/manage-products', function () {
    return view('backend.products.productsList');
});


Route::get('/add-products', function () {
    return view('backend.products.addProducts');
});

