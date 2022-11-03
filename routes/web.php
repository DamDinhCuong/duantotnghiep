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

Route::get('/', [\App\Http\Controllers\WebController::class, 'getIndex'])->name('home');
Route::get('/login', [\App\Http\Controllers\UserController::class, 'Login'])->name('login');
Route::get('/contact', [\App\Http\Controllers\WebController::class, 'getContact'])->name('contact');
Route::get('/about', [\App\Http\Controllers\WebController::class, 'getAbout'])->name('about');
Route::get('/checkout', [\App\Http\Controllers\WebController::class, 'getCheckout'])->name('checkout');
Route::get('/shop', [\App\Http\Controllers\WebController::class, 'getShop'])->name('shop');
Route::get('/single-news', [\App\Http\Controllers\WebController::class, 'getSingleNew'])->name('single_news');
Route::get('/single-product', [\App\Http\Controllers\WebController::class, 'getSingleProduct'])->name('single_product');
Route::get('/cart', [\App\Http\Controllers\WebController::class, 'getCart'])->name('cart');

