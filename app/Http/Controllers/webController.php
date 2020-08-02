<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use User;
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
    
    public function order() {
        return view('web.order');
    }
    public function comment() {
        return view('web.comment');
    }
    //Controller for Login and register
    public function register() {
        return view('web.register');
    }
    public function login() {
        return view('web.login');
    }
    public function postLogin(Request $request){
        $email=$request->email;
        $password=$request->password;
        $this ->validate($request,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],[
            'email.required'=>'Enter Email',
            'email.email'=>'Email Sai',
            'password.required'=>'Enter Email',
        ]
        );
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->back()->with(['flag'=>'success','message'=>'Dang nhap thanh cong']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Dang nhap khong thanh cong']);
        }
    }

    //controller for UserCreate
    public function getRegister() {
        return view('web.register');
    }
    public function postRegister(Request $request) {
        // nhận tất cả tham số vào mảng user
        // $this ->validate($request,
        // [
        //     'email'=>'required|email|unique:user,email',
        //     'password'=>'required|min:6|max:20',
        //     'username'=>'required|unique:user,username'
        //     'pwd2'=>'required|same:password',
        // ],[
        //     'email.required'=>'Vui long nhap Email',
        //     'email.email'=>'Email Sai',
        //     'email.unique'=>'Email nay da duoc su dung'
        //     'password.required'=>'Enter Email',
        //     'pwd2.same'=>'Mat khau khong giong nhau',
        //     'password.min'=>'Mat khau it nhat 6 ki tu',
        // ]
        // );
        $user = $request->all();
        DB::table('user')->insert([
            'email'=>$user['email'],
            'password'=>$user['password'],
            'username'=>$user['username'],
            'address'=>$user['address'],
            'birthday'=>($user['birthday']),
            'name'=>$user['name'],
            'phonenumber'=>$user['phonenumber']
        ]);
        return redirect()->action('webController@postRegister');
}
// Controller for product end


// Controller for event start
    public function event() {
        return view('web.event');
    }
    public function eventCreate() {
        return view('web.eventCreate');
    }
    public function eventManagerment() {
        return view('web.eventManagerment');
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
