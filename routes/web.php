<?php

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now productCreate something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Admin Route 
Route::get('admin/index', 'adminController@index');
Route::get('admin/productCreate', 'adminController@productCreate');
Route::post('admin/postProductCreate', 'adminController@postProductCreate');
Route::get('admin/productUpdate/{id}', 'adminController@productUpdate');
Route::post('admin/postProductUpdate/{id}', 'adminController@postProductUpdate');
Route::get('admin/deleteProduct/{id}', 'adminController@deleteProduct');


//Web Route 
Route::get('web/index', 'webController@index');
Route::get('web/product', 'webController@product');
Route::get('web/event', 'webController@event');
Route::get('web/about', 'webController@about');
Route::get('web/contact', 'webController@contact');
Route::get('web/membership', 'webController@membership');
