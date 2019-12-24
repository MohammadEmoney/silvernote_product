<?php

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

Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('products/add-to-home', 'ProductController@addToHome')->name('products.home');
    Route::resource('products', 'ProductController');
    Route::patch('products/add-to-home/{product}', 'ProductController@updateAddToHome')->name('products.home.update');
    Route::resource('categories', 'CategoryController');
});

Route::namespace('Front')->group(function(){
    Route::get('/', 'HomeController@home')->name('home');
});
// Route::get('/csrf', function () {
//     return csrf_token();
// });

// User Authentications
Auth::routes(['verify' => true]);
Route::get('login/google', 'Auth\LoginController@googleLogin')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@googleCallback')->name('login.google.callback');


