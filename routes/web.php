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
    Route::get('admin/index', 'adminController@index');


//Admin Route 

    //Product Route
    Route::get('admin/product/productList', 'adminController@productList');
    Route::get('admin/product/productCreate', 'adminController@productCreate');
    Route::post('admin/product/postProductCreate', 'adminController@postProductCreate');
    Route::get('admin/product/productUpdate/{id}', 'adminController@productUpdate');
    Route::post('admin/product/postProductUpdate/{id}', 'adminController@postProductUpdate');
    Route::get('admin/product/productDelete/{id}', 'adminController@productDelete');
    Route::get('admin/product/productDetail/{id}', 'adminController@productDetail');
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
    Route::get('admin/revenue/deptUpdate/{id}', 'adminController@deptUpdate');
    Route::post('admin/revenue/postdeptUpdate/{id}', 'adminController@postdeptUpdate');
    //comment Route
    Route::get('admin/comment/listComment', 'adminController@listComment');
    //Category Route
    Route::get('admin/category/categoryList', 'adminController@categoryList');
    Route::post('admin/category/postCategoryCreate', 'adminController@postCategoryCreate');
    Route::get('admin/category/categoryUpdate/{id}', 'adminController@categoryUpdate');
    Route::post('admin/category/postCategoryUpdate/{id}', 'adminController@postCategoryUpdate');
    Route::get('admin/category/categoryDelete/{id}', 'adminController@categoryDelete');
//Web Route 

Route::get('web/product', 'webController@product');
    //Event Route
    Route::get('web/event', 'webController@event');
    Route::get('web/eventCreate/{id}', 'webController@eventCreate');
    Route::post('web/posteventCreate/{id}', 'webController@postEventCreate');
    Route::get('web/eventManagerment/2', 'webController@eventManagerment');
    Route::get('web/eventPartnerUpdate/{id}', 'webController@eventPaUp');
    Route::post('web/posteventPartnerUpdate/{id}', 'webController@postEventPaUp');

Route::get('web/about', 'webController@about');
Route::get('web/contact', 'webController@contact');
Route::get('web/membership', 'webController@membership');
Route::get('web/cart', 'webController@cart');
Route::get('web/shop', 'webController@shop');
Route::get('web/order', 'webController@order');
Route::get('web/productDetail', 'webController@productDetail');
Route::get('web/comment', 'webController@comment');
//Register and Login Route

Route::get('web/register', 'webController@register');
Route::get('web/register', 'webController@getRegister');
Route::post('web/register', 'webController@postRegister');
Route::get('web/index', 'webController@index');
Route::get('web/login', 'webController@login');
Route::post('web/login', 'webController@postLogin');
Route::get('web/login', 'webController@login');
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'webController@logout'
]);
    