<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Product;

use App\Services\AdminService;

Route::get('/login', function () {
    return view('auth.login');
});

// Route::get('/', action: [HomeController::class, 'index']);


Route::get('/', function () {
    return view('frontend.Home.home');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/forget-password', function () {
    return view('auth.passwords.reset');
});



Route::get('/all-products', function () {
    return view('frontend.Products.allProducts');
});


Route::get('/manage-products', function () {
    return view('backend.products.productsList');
});


// Route::get('/add-products', function () {
//     return view('backend.products.addProducts');
// });


Route::post('/registers', action: [RegisterController::class, 'create'])->name('registers');
Route::post('/login', action: [LoginController::class, 'login'])->name('login');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-dashboard');


// Route::get('/admin-dashboard', function () {
//     return view('backend.dashboard.index');
// })->name('admin-dashboard');
// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->middleware('auth');


Route::get('/admin-profile', [App\Http\Controllers\Admin\AdminProfileController::class, 'ViewProfile'])->middleware('auth');

// Route::put('/admin-update-profile', [App\Http\Controllers\Admin\AdminProfileController::class, 'update'])->name('admin-update-profile')->middleware('auth');
// web.php
Route::post('/admin-update-profiles', [AdminProfileController::class, 'update'])->name('admin-update-profile')->middleware('auth');


Route::get('/edit-password', [ChangePasswordController::class,'editPassword'])->name('edit-password')->middleware('auth');

Route::post('/update-password', [ChangePasswordController::class,'updatePassword'])->name('change-password')->middleware('auth');

Route::post('/update-image', [AdminProfileController::class, 'ProfilePictureUpload'])->name('upload-profileImg')->middleware('auth');


Route::get('/productsOperations', [App\Http\Controllers\Product\ProductController::class, 'productPage'])->name('products-manage');
Route::post('/products/store', [App\Http\Controllers\Product\ProductController::class, 'store'])->name('products-store');

Route::get('/productsList', [App\Http\Controllers\Product\ProductController::class, 'viewProducts'])->name('products-list');

Route::post('/delete/{id}', [App\Http\Controllers\Product\ProductController::class, 'destroy'])->name('delete');

// Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');


// Route::get('/admin-profile', function () {
//     return view('backend.dashboard.profile');
// });change-password

//updateProduct

Route::get('/edit-product/{id}', [App\Http\Controllers\Product\ProductController::class, 'editProduct'])->name('edit-product');
Route::post('/update-product/{id}', [App\Http\Controllers\Product\ProductController::class, 'updateProduct'])->name('update-product');
