<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('layouts/index');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/cart', function () {
    return view('layouts/cart');
});

Route::get('/checkout', function () {
    return view('layouts/checkout');
});

Route::get('/gallery', function () {
    return view('layouts/gallery');
});

Route::get('/my-account', function () {
    return view('layouts/my-account');
});

Route::get('/shop-detail', function () {
    return view('layouts/shop-detail');
});

Route::get('/shop', function () {
    return view('layouts/shop');
});

Route::get('/wishlist', function () {
    return view('layouts/wishlist');
});

Route::get('/contact-us', function () {
    return view('layouts/contact-us');
});