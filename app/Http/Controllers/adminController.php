<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index()
    {
        $earnLastmonth = DB::table('order')
            ->whereMonth('deliverydate', '=', now()->month - 1)
            ->get();
        $earnThisyear = DB::table('order')
            ->whereYear('deliverydate', '=', now()->year)
            ->get();
        $receivable = DB::table('event')
            ->where('status', 'Approved')
            ->orwhere('status', 'Canceled')
            ->get();
        $pendingRequest = DB::table('event')
            ->where('status', 'Processing')
            ->get();
        $pendingRequest1 = DB::table('event')
            ->where('status', 'Approved')
            ->where('todate', '<', now())
            ->get();
        return view('admin.index')->with(['earnLastmonth' => $earnLastmonth, 'earnThisyear' => $earnThisyear, 'receivable' => $receivable, 'pendingRequest' => $pendingRequest, 'pendingRequest1' => $pendingRequest1]);
    }

    // Controller for product start
    public function productList()
    {
        $products = DB::table('product')->get();
        return view('admin.product.productList')->with(['products' => $products]);
    }
    public function productFavorite()
    {
        $favoriteSong = DB::table('product')
            ->join('favorite', 'product.id', '=', 'favorite.productid')
            ->select('product.*', DB::raw('count(*) as total'))
            ->groupBy('product.id')
            ->get();
        return view('admin.product.productFavorite')->with(['favoriteSong' => $favoriteSong]);
    }
    public function checkProductName($name)
    {
        $product = DB::table('product')
            ->where('name', $name)
            ->first();
        if ($product) {
            return response()->json([
                'error' => 'This name is used',
            ]);
        }
    }
    public function checkCategoryName($name)
    {
        $category = DB::table('category')
            ->where('categoryname', $name)
            ->first();
        if ($category) {
            return response()->json([
                'error' => 'This category name is used',
            ]);
        }
    }
    public function productCreate()
    {
        $categories = DB::table('category')->get();
        return view('admin.product.productCreate')->with(['categories' => $categories]);
    }
    public function postProductCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng product
        $product = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('admin/product/productCreate')->with('Error', 'You can choose only jpg,png,jpeg file');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("images", $imageName);
        } else {
            $imageName = null;
        }
        // xử lý mp3 vào thư mục
        if ($request->hasFile('demo')) {
            $file = $request->file('demo');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'mp3') {
                return redirect('admin/product/productCreate')->with('Error', 'You can choose only mp3 file');
            }
            $demoName = $file->getClientOriginalName();
            $file->move("music-files", $demoName);
        } else {
            $demoName = null;
        }
        DB::table('product')->insert([
            'name' => $product['name'],
            'artist' => $product['artist'],
            'author' => $product['author'],
            'price' => intval($product['price']),
            'description' => $product['description'],
            'image' => $imageName,
            'demo' => $demoName,
        ]);
        // ->pluck: return an array
        // ->value: return an value
        $productid = DB::table('product')
            ->where('name', '=', $product['name'])
            ->value('id');
        DB::table('productcategory')->insert([
            'productid' => $productid,
            'categoryname' => $product['category'],
        ]);
        return redirect()->action('adminController@productList');
    }
    public function productUpdate($id)
    {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->first();
        return view('admin.product.productUpdate', ['p' => $p]);
    }
    public function postProductUpdate(Request $request, $id)
    {
        // nhận tất cả tham số vào mảng product
        $product = $request->all();
        // xử lý upload hình vào thư mục
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            if ($extension != 'jpg' && $extension != 'png' && $extension != 'jpeg') {
                return redirect('productUpdate')->with('loi', 'Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
            }
            $imageName = $file->getClientOriginalName();
            $file->move("public/images", $imageName);
        } else {
            // không upload hình mới => giữ lại hình cũ
            $p = DB::table('product')
                ->where('id', intval($id))
                ->first();
            $imageName = $p->image;
        }
        DB::table('product')
            ->where('id', intval($id))
            ->update([
                'name' => $product['name'],
                'artist' => $product['artist'],
                'author' => $product['author'],
                'price' => intval($product['price']),
                'description' => $product['description'],
                'image' => $imageName,
            ]);
        return redirect()->action('adminController@productList');
    }
    public function productDelete($id)
    {
        $p = DB::table('productcategory')
            ->where('productid', intval($id))
            ->delete();
        $p = DB::table('product')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@productList');
    }
    public function productDetail($id)
    {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->first();
        return view('admin.product.productDetail', ['p' => $p]);
    }
    //phong
    // public function detailOrder() {
    //     return view('admin.order.detailOrder');
    // }
    // public function listOrder() {
    //     $orders = DB::table('order')->get();
    //     return view('admin.order.listOrder')->with(['orders'=>$orders]);
    // }

    public function listOrder()
    {
        $order = DB::table('order')->get();
        return view('admin.order.listOrder')->with(['order' => $order]);
    }

    public function detailOrder($id)
    {
        $order = DB::table('order')
            ->where('id', $id)
            ->first();
        $orderDetail = DB::table('orderdetail')
            ->join('product', 'orderdetail.productid', '=', 'product.id')
            ->select('orderdetail.id', 'orderdetail.quantity', 'orderdetail.productid', 'product.name', 'product.image', 'product.price')
            ->where('orderdetail.orderid', $id)
            ->get();

        $totalPrice[0] = 0;
        foreach ($orderDetail as $key) {
            $totalPrice[0] += $key->price * $key->quantity;
        }
        return view('admin.order.detailOrder')->with(['order' => $order, 'orderDetail' => $orderDetail, 'totalPrice' => $totalPrice]);
    }

    public function deleteOrder($id)
    {
        // dd($id);

        DB::table('orderdetail')
            ->where('orderid', intval($id))
            ->delete();

        DB::table('order')
            ->where('id', intval($id))
            ->delete();

        return redirect()->action('adminController@listOrder');
    }
    public function editOrder($id)
    {
        $order = DB::table('order')
            ->where('id', $id)
            ->first();
        $orderDetail = DB::table('orderdetail')
            ->join('product', 'orderdetail.productid', '=', 'product.id')
            ->select('orderdetail.id', 'orderdetail.quantity', 'orderdetail.productid', 'product.name', 'product.image', 'product.price')
            ->where('orderdetail.orderid', $id)
            ->get();

        $totalPrice[0] = 0;
        foreach ($orderDetail as $key) {
            $totalPrice[0] += $key->price * $key->quantity;
        }
        return view('admin.order.editOrder')->with(['order' => $order, 'orderDetail' => $orderDetail, 'totalPrice' => $totalPrice]);
    }
    public function postOrder(Request $request)
    {
        $c = DB::table('order')
            ->where('id', intval($request['id']))
            ->first();
        // dd($c);
        // dd($request['status']);
        switch ($request['status']) {
            case 'Processing':
                $status = 'Processing';
                break;
            case 'Canceled':
                $status = 'Canceled';
                break;
            case 'Delivering':
                $status = 'Delivering';
                break;
            case 'Delivered':
                $status = 'Delivered';
                break;
        }
        // dd($status);
        DB::table('order')
            ->where('id', intval($request['id']))
            ->update([
                'status' => $request['status'],
            ]);
        return redirect()->action('adminController@listOrder');
    }
    public function listComment()
    {
        return view('admin.comment.listComment');
    }
    // Controller for product end

    // Controller for event start
    public function eventList()
    {
        $events = DB::table('event')
            ->join('user', 'event.userid', '=', 'user.id')
            ->select('event.*', 'user.username')
            ->get();
        return view('admin.event.eventList')->with(['events' => $events]);
    }
    public function eventView($id)
    {
        $e = DB::table('event')
            ->join('user', 'event.userid', '=', 'user.id')
            ->select('event.*', 'user.username')
            ->where('event.id', intval($id))
            ->first();
        return view('admin.event.eventView')->with(['e' => $e]);
    }
    public function eventUpdate($id)
    {
        $e = DB::table('event')
            ->join('user', 'event.userid', '=', 'user.id')
            ->select('event.*', 'user.username')
            ->where('event.id', intval($id))
            ->first();
        return view('admin.event.eventUpdate', ['e' => $e]);
    }
    public function postEventUpdate(Request $request, $id)
    {
        $status = $request->input('status');
        $e = DB::table('event')
            ->where('id', intval($id))
            ->update(['status' => $status]);
        return redirect()->action('adminController@eventList');
    }
    public function eventDelete(Request $request, $id)
    {
        $status = $request->input('status');
        $remaining = $request->input('remaining');
        /*if(strcmp($status,"Approved")|| strcmp($status,"Processing")){
        return redirect()->back()->with('alert','You Cannot Delete this');
    }*/
        DB::table('event')
            ->where('id', intval($id))
            ->where('status', 'Canceled')
            ->where('deptremaining', '=', '0')
            ->delete();
        return redirect()->action('adminController@eventList');
    }
    // Controller for event end
    // Controller for All User
    public function allUsers()
    {
        $user = DB::table('user')->get();
        return view('admin.User.allUsers')->with(['user' => $user]);
    }
    public function userDelete($id)
    {
        $us = DB::table('user')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@allUsers');
    }
    public function userDetail($id)
    {
        $us = DB::table('user')
            ->where('id', intval($id))
            ->first();
        return view('admin.user.userDetail', ['us' => $us]);
    }
    public function contact()
    {
        $ct = DB::table('contact')->get();
        return view('admin.user.message')->with(['ct' => $ct]);
    }
    public function deleteMessage($id)
    {
        $us = DB::table('contact')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@contact');
    }
    //Controller for revenue start
    public function revenueDetails()
    {
        $revenueevent = DB::table('event')
            ->join('user', 'event.userid', '=', 'user.id')
            ->select('event.*', 'user.username')
            ->where('status', 'Approved')
            ->orwhere('status', 'Canceled')
            ->get();
        $revenueorder = DB::table('order')->get();
        return view('admin.revenue.revenueDetails')->with(['revenueevent' => $revenueevent, 'revenueorder' => $revenueorder]);
    }
    public function partnerDept()
    {
        $dept = DB::table('event')
            ->join('user', 'event.userid', '=', 'user.id')
            ->select('event.*', 'user.username')
            ->where('status', 'Approved')
            ->orwhere('status', 'Canceled')
            ->get();
        return view('admin.revenue.partnerDept')->with(['dept' => $dept]);
    }
    public function deptUpdate($id)
    {
        $e = DB::table('event')
            ->join('user', 'event.userid', '=', 'user.id')
            ->select('event.*', 'user.username')
            ->where('event.id', intval($id))
            ->first();
        return view('admin.revenue.deptUpdate', ['e' => $e]);
    }
    public function postdeptUpdate(Request $request, $id)
    {
        $totaldept = $request->input('remaining');
        $haspaid = $request->input('haspaid');
        $remain = $totaldept - $haspaid;
        if ($remain < 0) {
            return redirect('admin/revenue/deptUpdate/' . $id)->with('alert', 'Has Paid must lower than Remaining');
        }
        DB::table('event')
            ->where('id', intval($id))
            ->update(['haspaid' => floatval($haspaid)]);
        DB::table('event')
            ->where('id', intval($id))
            ->update(['deptremaining' => floatval($remain)]);
        return redirect()->action('adminController@partnerDept');
    }
    //Controller for revenue end

    // Controller for category start
    public function categoryList()
    {
        $category = DB::table('category')->get();
        return view('admin.category.categoryList')->with(['category' => $category]);
    }
    public function postCategoryCreate(Request $request)
    {
        // nhận tất cả tham số vào mảng category
        $category = $request->all();
        DB::table('category')->insert([
            'categoryname' => $category['categoryname'],
        ]);
        return redirect()->action('adminController@categoryList');
    }
    public function categoryUpdate($id)
    {
        $c = DB::table('category')
            ->where('id', intval($id))
            ->first();
        return view('admin.category.categoryUpdate', ['c' => $c]);
    }
    public function postCategoryUpdate(Request $request, $id)
    {
        $categoryname = $request->input('categoryname');
        $newcategoryname = $request->input('newcategoryname');
        $productid = DB::table('category')
            ->where('categoryname', '=', $categoryname)
            ->value('id'); //get productid
        //create new category
        DB::table('category')->insert([
            'categoryname' => $newcategoryname,
        ]);
        //change categoryname in table productcategory
        DB::table('productcategory')
            ->where('categoryname', $categoryname)
            ->update(['categoryname' => $newcategoryname]);
        //delete old category
        DB::table('category')
            ->where('id', intval($id))
            ->delete();
        //return old category id to new category
        DB::table('category')
            ->where('categoryname', $newcategoryname)
            ->update(['id' => intval($id)]);
        return redirect()->action('adminController@categoryList');
    }
    public function categoryDelete($id)
    {
        DB::table('category')
            ->where('id', intval($id))
            ->delete();
        return redirect()->action('adminController@categoryList');
    }
    // Controller for category end
}
