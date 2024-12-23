<?php

use App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminSigninController;
use App\Http\Controllers\Admin\AdminSignupController;

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
})->name('admin-dashboard');


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


Route::post('/sign_up', action: [AdminSignupController::class, 'signup'])->name('admin-signup');
Route::post('/sign_in', action: [AdminSigninController::class, 'signin'])->name('admin-signin');





