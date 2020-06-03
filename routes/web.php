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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/productdetail', function () {
    return view('pages.productdetail');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
