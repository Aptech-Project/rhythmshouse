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
    //Product Route
    Route::get('admin/product/productList', 'adminController@productList');
    Route::get('admin/product/productCreate', 'adminController@productCreate');
    Route::post('admin/product/postProductCreate', 'adminController@postProductCreate');
    Route::get('admin/product/productUpdate/{id}', 'adminController@productUpdate');
    Route::post('admin/product/postProductUpdate/{id}', 'adminController@postProductUpdate');
    Route::get('admin/product/deleteProduct/{id}', 'adminController@deleteProduct');
    //Order Route
    Route::get('admin/order/detailOrder', 'adminController@detailOrder');
    Route::get('admin/order/listOrder', 'adminController@listOrder');
    //Event Route
    Route::get('admin/event/eventList', 'adminController@eventList');
    Route::get('admin/event/eventView/{id}', 'adminController@eventView');
    Route::get('admin/event/eventUpdate/{id}', 'adminController@eventUpdate');
    Route::post('admin/event/posteventUpdate/{id}', 'adminController@posteventUpdate');
    Route::get('admin/event/deleteEvent/{id}', 'adminController@eventDelete');
    //User Route
    Route::get('admin/user/allUsers', 'adminController@allUsers');
    //Revenue Route
    Route::get('admin/revenue/revenueDetails', 'adminController@revenueDetails');
    Route::get('admin/revenue/partnerDept', 'adminController@partnerDept');


//Web Route 
Route::get('web/index', 'webController@index');
Route::get('web/product', 'webController@product');
    //Event Route
    Route::get('web/event', 'webController@event');
    Route::get('web/eventCreate', 'webController@eventCreate');

Route::get('web/about', 'webController@about');
Route::get('web/contact', 'webController@contact');
Route::get('web/membership', 'webController@membership');
Route::get('web/cart', 'webController@cart');
Route::get('web/shop', 'webController@shop');
