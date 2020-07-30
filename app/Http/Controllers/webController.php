<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class webController extends Controller
{
    public function index() {
        return view('web.index');
    }
// Controller for product start
    public function product() {
        return view('web.product');
    }
    public function productDetail() {
        return view('web.productDetail');
    }
    //phong
    public function cart() {
        return view('web.cart');
    }
    public function shop() {
        return view('web.index2');
    }
// Controller for product end


// Controller for event start
    public function event() {
        return view('web.event');
    }
    public function eventCreate() {
        return view('web.eventCreate');
    }
// Controller for event end


// Controller for other view start (about, contact, membership)
    public function about() {
        return view('web.about');
    }
    public function contact() {
        return view('web.contact');
    }
    public function membership() {
        return view('web.membership');
    }
// Controller for other view end


// Controller for user start
// Controller for user end
}
