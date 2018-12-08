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

Route::get('/', 'FrontController@index');
Route::get('products', 'FrontController@allProducts');
Route::get('products/{category}', 'FrontController@categoryProducts');
Route::get('product/{product}', 'FrontController@product');
Route::get('product/{product}/order', 'FrontController@orderForm');
Route::post('product/{product}/order', 'FrontController@orderProduct');
Route::get('contacts', function (){
    return view('contact_us');
});
Route::post('contacts', 'FrontController@contactUs');
Route::post('subscribe', 'FrontController@subscribe');