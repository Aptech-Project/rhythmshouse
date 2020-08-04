<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index() {
        $earnLastmonth = DB::table('order')->whereMonth('deliverydate','=',now()->month-1)->get();
        $earnThisyear = DB::table('order')->whereYear('deliverydate','=',now()->year)->get();
        $receivable = DB::table('event')->where('status','Approved')->get();
        $pendingRequest = DB::table('event')->where('status','Processing')->get();
        return view('admin.index')->with(['earnLastmonth'=>$earnLastmonth, 'earnThisyear'=>$earnThisyear, 'receivable'=>$receivable, 'pendingRequest'=>$pendingRequest]);
    }
    

// Controller for product start
    public function productList() {
    $products = DB::table('product')->get();
    return view('admin.product.productList')->with(['products'=>$products]);
    }
    public function productCreate() {
        return view('admin.product.productCreate');
    }
    public function postProductCreate(Request $request) {
        // nhận tất cả tham số vào mảng product
        $product = $request->all();
        // xử lý upload hình vào thư mục
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('admin/product/productCreate')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images",$imageName);
        }
        else
        {
            $imageName = null;
        }

        DB::table('product')->insert([
            'name'=>$product['name'],
            'categoryname'=>$product['category'],
            'artist'=>$product['artist'],
            'author'=>$product['author'],
            'price'=>intval($product['price']),
            'description'=>$product['description'],
            'image'=>$imageName
        ]);
        return redirect()->action('adminController@productList');
    }
    public function productUpdate($id) {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->first();
        return view('admin.product.productUpdate', ['p'=>$p]);
    }
    public function postProductUpdate(Request $request, $id) {
        $name = $request->input('name');
        $price = $request->input('price');
        $description = $request->input('description');
        // xử lý upload hình vào thư mục
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension = $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
            {
                return redirect('productUpdate')->with('loi','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("public/images",$imageName);
        } else { // không upload hình mới => giữ lại hình cũ
            $p = DB::table('product')
                ->where('id', intval($id))
                ->first();
            $imageName = $p->image;
        }

        $p = DB::table('product')
                ->where('id', intval($id))
                ->update(['name'=>$name, 'price'=>intval($price), 'description'=>$description, 'image'=>$imageName]);
        return redirect()->action('adminController@productList');
    }
    public function productDelete($id) {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@productList');
    }
    //phong
    public function detailOrder() {
        return view('admin.order.detailOrder');
    }
    public function listOrder() {
        return view('admin.order.listOrder');
    }
    public function listComment() {
        return view('admin.comment.listComment');
    }
// Controller for product end

// Controller for event start
public function eventList() {
    $events = DB::table('event')->join('user','event.userid','=','user.id')->select('event.*','user.username')->get();
    return view('admin.event.eventList')->with(['events'=>$events]);
    }
public function eventView($id) {
        $e = DB::table('event')->join('user','event.userid','=','user.id')->select('event.*','user.username')
        ->where('event.id', intval($id))
        ->first();
        return view('admin.event.eventView')->with(['e'=>$e]);
        }
public function eventUpdate($id) {
        $e = DB::table('event')->join('user','event.userid','=','user.id')->select('event.*','user.username')
            ->where('event.id', intval($id))
            ->first();
        return view('admin.event.eventUpdate', ['e'=>$e]);
    }
public function postEventUpdate(Request $request, $id) {
        $status = $request->input('status');       
        $e = DB::table('event')
                ->where('id', intval($id))
                ->update(['status'=>$status]);
        return redirect()->action('adminController@eventList');
    }
public function eventDelete($id) {
        $e = DB::table('event')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@eventList');
    }
// Controller for event end
// Controller for All User
public function allUsers() {
    $user = DB::table('user')->get();
    return view('admin.User.allUsers')->with(['user'=>$user]);
    }
 public function userDelete($id) {
        $us = DB::table('user')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@allUsers');
    }
//Controller for revenue start
public function revenueDetails() {
    $revenueevent = DB::table('event')->join('user','event.userid','=','user.id')->select('event.*','user.username')->get();
    $revenueorder = DB::table('order')->get();
    return view('admin.revenue.revenueDetails')->with(['revenueevent'=>$revenueevent,'revenueorder'=>$revenueorder]);
    }
public function partnerDept() {
    $dept = DB::table('event')->join('user','event.userid','=','user.id')->select('event.*','user.username')->get();
    return view('admin.revenue.partnerDept')->with(['dept'=>$dept]);
    }
public function deptUpdate($id) {
        $e = DB::table('event')->join('user','event.userid','=','user.id')->select('event.*','user.username')
            ->where('event.id', intval($id))
            ->first();
        return view('admin.revenue.deptUpdate', ['e'=>$e]);
    }
public function postdeptUpdate(Request $request, $id) {
        $haspaid = $request->input('haspaid');       
        $e = DB::table('event')
                ->where('id', intval($id))
                ->update(['haspaid'=>floatval($haspaid)]);
        return redirect()->action('adminController@partnerDept');
    }
//Controller for revenue end
}