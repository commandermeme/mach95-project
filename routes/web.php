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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/products/{category}', 'ProductsController@index');
Route::get('/productdetail/{id}', 'ProductsController@show');
Route::get('/pros/{category}', 'ProductsController@pros');
Route::get('/checkout/{id}', 'ProductsController@checkout');

// Route::get('/products', function () {
//     return view('pages.products');
// });

// Route::get('/productdetail', function () {
//     return view('pages.productdetail');
// });

// Route::get('/checkout', function () {
//     return view('pages.checkout');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
