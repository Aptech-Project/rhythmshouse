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

//Admin Controller 
Route::get('admin/index', 'adminController@index');
//Product Controller
Route::get('admin/product/productList', 'adminController@productList');
Route::get('admin/product/productCreate', 'adminController@productCreate');
Route::post('admin/product/postProductCreate', 'adminController@postProductCreate');
Route::get('admin/product/productUpdate/{id}', 'adminController@productUpdate');
Route::post('admin/product/postProductUpdate/{id}', 'adminController@postProductUpdate');
Route::get('admin/product/deleteProduct/{id}', 'adminController@deleteProduct');


//Web Controller 
Route::get('web/index', 'webController@index');
Route::get('web/product', 'webController@product');
Route::get('web/event', 'webController@event');
Route::get('web/about', 'webController@about');
Route::get('web/contact', 'webController@contact');
Route::get('web/membership', 'webController@membership');
