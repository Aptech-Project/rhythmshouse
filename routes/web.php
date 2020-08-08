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

Route::prefix('admin')->name('admin')->middleware('checkLogin')->group(function(){
    Route::get('index', 'adminController@index');
    //Product Route
    Route::get('product/productList', 'adminController@productList');
    Route::get('product/productCreate', 'adminController@productCreate');
    Route::post('product/postProductCreate', 'adminController@postProductCreate');
    Route::get('product/productUpdate/{id}', 'adminController@productUpdate');
    Route::post('product/postProductUpdate/{id}', 'adminController@postProductUpdate');
    Route::get('product/productDelete/{id}', 'adminController@productDelete');
    Route::get('product/productDetail/{id}', 'adminController@productDetail');
    //Order Route
    Route::get('order/detailOrder', 'adminController@detailOrder');
    Route::get('order/listOrder', 'adminController@listOrder');
    //Event Route
    Route::get('event/eventList', 'adminController@eventList');
    Route::get('event/eventView/{id}', 'adminController@eventView');
    Route::get('event/eventUpdate/{id}', 'adminController@eventUpdate');
    Route::post('event/posteventUpdate/{id}', 'adminController@posteventUpdate');
    Route::get('event/deleteEvent/{id}', 'adminController@eventDelete');
    //User Route
    Route::get('user/allUsers', 'adminController@allUsers');
    //Revenue Route
    Route::get('revenue/revenueDetails', 'adminController@revenueDetails');
    Route::get('revenue/partnerDept', 'adminController@partnerDept');
    Route::get('revenue/deptUpdate/{id}', 'adminController@deptUpdate');
    Route::post('revenue/postdeptUpdate/{id}', 'adminController@postdeptUpdate');
    //comment Route
    Route::get('comment/listComment', 'adminController@listComment');
    //Category Route
    Route::get('category/categoryList', 'adminController@categoryList');
    Route::post('category/postCategoryCreate', 'adminController@postCategoryCreate');
    Route::get('category/categoryUpdate/{id}', 'adminController@categoryUpdate');
    Route::post('category/postCategoryUpdate/{id}', 'adminController@postCategoryUpdate');
    Route::get('category/categoryDelete/{id}', 'adminController@categoryDelete');
});


    
//Web Route 
Route::get('web/product', 'webController@product');
Route::get('web/index', 'webController@index');

Route::prefix('web')->name('web')->middleware('checkLoginUser')->group(function(){
    //event
    Route::get('eventCreate/{id}', 'webController@eventCreate');
    Route::post('posteventCreate/{id}', 'webController@postEventCreate');
    Route::get('eventManagerment/{id}', 'webController@eventManagerment');
    Route::get('eventPartnerUpdate/{id}', 'webController@eventPaUp');
    Route::post('posteventPartnerUpdate/{id}', 'webController@postEventPaUp');  
    //cart
    Route::get('cart/{id}', 'webController@cart');
    Route::get('cart/delete/{id}', 'webController@deleteCart');
    Route::get('cart/changeQuanity/{id}/{quanity}', 'webController@changeQuanity');
    Route::get('cart/addCart/{id}', 'webController@addCart');
    //profile
    Route::get('profile', 'webController@profileUser');
    Route::get('profile', 'webController@editUser');
    Route::post('profile', 'webController@update');
});

    //Event Route
    Route::get('web/event', 'webController@event');
    Route::get('web/eventClick/{id}', 'webController@eventClick');
    Route::get('web/eventDetail/{id}', 'webController@eventDetail');
    //Other Route
    Route::get('web/about', 'webController@about');
    Route::get('web/contact', 'webController@contact');
    Route::get('web/membership', 'webController@membership');
    Route::get('web/shop', 'webController@shop');
    Route::get('web/order', 'webController@order');
    Route::get('web/productDetail/{id}', 'webController@productDetail');
    Route::get('web/product/{categoryname}', 'webController@productByCategory');
    Route::get('web/comment', 'webController@comment');
//Register and Login Route

Route::get('logout',[
    'as'=>'logout',
    'uses'=>'webController@logout'
]);
Route::get('web/login',function(){
    return view('web/login');
});
Route::get('web/register',function(){
    return view('web/register');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');