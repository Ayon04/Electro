<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Services\AdminService;
Route::get('/signin', function () {
    return view('frontend.Signin');
});


Route::get('/signup', function () {
    return view('frontend.Signup');
});

Route::get('/forget-password', function () {
    return view('frontend.FogetPassword');
});



Route::get('/', function () {
    return view('frontend.Home.home');
});

Route::get('/admin-dashboard', function () {
    return view('backend.dashboard.index');
});


Route::get('/admin-profile', function () {
    return view('backend.dashboard.profile');
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


Route::post('/sign_up', [AdminController::class, 'store'])->name('admin-signup');





