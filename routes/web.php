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
    Route::get('admin/productCreate', 'adminController@productCreate');
    Route::post('admin/postProductCreate', 'adminController@postProductCreate');
    Route::get('admin/productUpdate/{id}', 'adminController@productUpdate');
    Route::post('admin/postProductUpdate/{id}', 'adminController@postProductUpdate');
    Route::get('admin/deleteProduct/{id}', 'adminController@deleteProduct');


//Web Controller 
Route::get('web/index', 'webController@index');
    //Product Controller
    Route::get('web/productCreate', 'webController@productCreate');
    Route::post('web/postProductCreate', 'webController@postProductCreate');
    Route::get('web/productUpdate/{id}', 'webController@productUpdate');
    Route::post('web/postProductUpdate/{id}', 'webController@postProductUpdate');
    Route::get('web/deleteProduct/{id}', 'webController@deleteProduct');
