<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Session;
use Image;
use Hash;
use Carbon\Carbon;
class webController extends Controller
{
    public function index() {
        $evt = DB::table('event')->where('status','Approved')->where('fromdate','>',now())->orderBy('fromdate','asc')->take(6)->get();
        $evttop = DB::table('event')->where('status','Approved')->where('fromdate','>',now())->orderBy('fromdate','asc')->first();
        return view('web.index')->with(['evt'=>$evt,'evttop'=>$evttop]);
    }

// Controller for product start
    public function product() {
        $products = DB::table('product')->paginate(5);
        $lastestProducts = DB::table('product')->orderBy('id','desc')->take(10)->get();
        $categories = DB::table('category')->get();
        $songCountByCategories = DB::table('productcategory')
        ->join('category', 'category.categoryname', '=', 'productcategory.categoryname')
        ->select(DB::raw('count(*) as total'))
        ->groupBy('productcategory.categoryname')
        ->get();
        return view('web.product')->with(['products'=>$products, 'categories'=>$categories, 'songCountByCategories'=>$songCountByCategories, 'lastestProducts'=>$lastestProducts]);
    }
    public function productDetail($id) {
        $p = DB::table('product')
            ->where('id', intval($id))
            ->first();
        $c = DB::table('productcategory')
        ->where('productid', intval($id))
        ->first();
        return view('web.productDetail', ['p'=>$p, 'c'=>$c]);
    }
    public function productByCategory($categoryname) {
        $products = DB::table('product')
        ->join('productcategory', 'product.id', '=', 'productcategory.productid')
        ->select('product.*')
        ->where('productcategory.categoryname', $categoryname)
        ->paginate(5);
        $lastestProducts = DB::table('product')->orderBy('id','desc')->take(10)->get();
        $categories = DB::table('category')->get();
        $songCountByCategories = DB::table('productcategory')
        ->join('category', 'category.categoryname', '=', 'productcategory.categoryname')
        ->select(DB::raw('count(*) as total'))
        ->groupBy('productcategory.categoryname')
        ->get();
        return view('web.productByCategory')->with(['products'=>$products, 'categories'=>$categories, 'songCountByCategories'=>$songCountByCategories, 'lastestProducts'=>$lastestProducts]);
    }
    public function seacrhProduct(Request $request) {
        $products = DB::table('product')
        ->join('productcategory', 'product.id', '=', 'productcategory.productid')
        ->select('product.*')
        ->where('productcategory.categoryname', $categoryname)
        ->paginate(5);
        $lastestProducts = DB::table('product')->orderBy('id','desc')->take(10)->get();
        $categories = DB::table('category')->get();
        $songCountByCategories = DB::table('productcategory')
        ->join('category', 'category.categoryname', '=', 'productcategory.categoryname')
        ->select(DB::raw('count(*) as total'))
        ->groupBy('productcategory.categoryname')
        ->get();
        return view('web.productByCategory')->with(['products'=>$products, 'categories'=>$categories, 'songCountByCategories'=>$songCountByCategories, 'lastestProducts'=>$lastestProducts]);
    }
    //phong
    public function cart($id) {
        // dd($id);
        
        $cart = DB::table('cart')->where('userid',$id)->first();
        // dd($cart);
        if(!$cart){
            DB::table('cart')->insert([
                'userid' => $id
            ]);
            $cart = DB::table('cart')->where('userid',$id)->first();
        }
        $idCart = $cart->id;
        $cartAll = DB::table('cartdetail')
            ->join('product', 'cartdetail.productid', '=', 'product.id')
            ->join('cart', 'cart.id', '=', 'cartdetail.cartid')
            ->select('cartdetail.id','cartdetail.quanity' ,'cartdetail.productid','product.name','product.image','product.price')
            ->where('cartdetail.cartid',$idCart)
            ->get();
        // dd($cartdetail);
        $totalPrice[0]=0;
        foreach ($cartAll as $key) {
            $totalPrice[0] += $key->price *$key->quanity;
        }
        // dd($totalPrice);    
        return view('web.cart')->with(['cartAll'=> $cartAll,'totalPrice'=> $totalPrice]);
    }
    
    public function shop() {
        return view('web.index2');
    }
    public function changeQuanity($id,$quanity) {

        $cartdetail = DB::table('cartdetail')
                ->where('id', intval($id))
                ->first();
        $idCart = $cartdetail->cartid;
        $cart = DB::table('cart')
                ->where('id', intval($idCart))
                ->first();
        $userid = $cart -> userid;

        $c = DB::table('cartdetail')
                ->where('id', intval($id))
                ->update(['quanity' => intval($quanity)]);

        $cartAll = DB::table('cartdetail')
            ->join('product', 'cartdetail.productid', '=', 'product.id')
            ->join('cart', 'cart.id', '=', 'cartdetail.cartid')
            ->select('cartdetail.id','cartdetail.quanity' ,'cartdetail.productid','product.name','product.image','product.price')
            ->where('cartdetail.cartid',$idCart)
            ->get();
        // dd($cartdetail);
        $totalPrice[0]=0;
        foreach ($cartAll as $key) {
            $totalPrice[0] += $key->price *$key->quanity;
        }
        // dd($totalPrice);    
        return view('web.listcard')->with(['cartAll'=> $cartAll,'totalPrice'=> $totalPrice]);
    }

    public function deleteCart($id) {
        $cartdetail = DB::table('cartdetail')
                ->where('id', intval($id))
                ->first();
        $idCart = $cartdetail->cartid;
        $cart = DB::table('cart')
                ->where('id', intval($idCart))
                ->first();
        $userid = $cart -> userid;
        $c = DB::table('cartdetail')
                ->where('id', intval($id))
                ->delete();

        $cartAll = DB::table('cartdetail')
            ->join('product', 'cartdetail.productid', '=', 'product.id')
            ->join('cart', 'cart.id', '=', 'cartdetail.cartid')
            ->select('cartdetail.id','cartdetail.quanity' ,'cartdetail.productid','product.name','product.image','product.price')
            ->where('cartdetail.cartid',$idCart)
            ->get();
        // dd($cartdetail);
        $totalPrice[0]=0;
        foreach ($cartAll as $key) {
            $totalPrice[0] += $key->price *$key->quanity;
        }
        // dd($totalPrice);    
        return view('web.listcard')->with(['cartAll'=> $cartAll,'totalPrice'=> $totalPrice]);
    }
    public function buynow($id) {
        $newProduct = DB::table('product')
            ->where('id', $id)
            ->first();
        if(Auth::User() != null){
                $cart = DB::table('cart')
                        ->where('userid', Auth::User()->id)
                        ->first();
                $cartid = $cart->id;
                $listCartDetail = DB::table('cartdetail')
                                ->where('productid', intval($id))
                                ->where('cartid', intval($cartid))
                                ->first();
                                // dd($listCartDetail);
                if ($listCartDetail) {
                    $quanity = DB::table('cartdetail')
                        ->where('id', intval($listCartDetail->id))
                        ->first();
                    $q= $quanity->quanity;
                        $updateQuanity = DB::table('cartdetail')
                                        ->where('id', intval($listCartDetail->id))
                                        ->update(['quanity' => intval($q)+1]);
                        // dd($updateQuanity);
                } else {
                    $updateQuanity = DB::table('cartdetail')->insert([
                                        'quanity' => 1,
                                        'cartid' => intval($cartid),
                                        'productid' => intval($id),
                                    ]);
                    // dd($updateQuanity);
                }
            // $count = DB::table('cartdetail')->where('cartid',$cartid)->count();
            // dd($count);
           
        }  

        return view('web.cart')->with(['cartAll'=> $cartAll,'totalPrice'=> $totalPrice]);
    }
    public function addCart($id){
        $cart = DB::table('cart')->where('userid',Auth::User()->id)->first();
        // dd($cart);
        if(!$cart){
            DB::table('cart')->insert([
                'userid' => Auth::User()->id
            ]);
            $cart = DB::table('cart')->where('userid',Auth::User()->id)->first();
        }
        $newProduct = DB::table('product')
            ->where('id', $id)
            ->first();
        if(Auth::User() != null){
                $cart = DB::table('cart')
                        ->where('userid', Auth::User()->id)
                        ->first();
                $cartid = $cart->id;
                $listCartDetail = DB::table('cartdetail')
                                ->where('productid', intval($id))
                                ->where('cartid', intval($cartid))
                                ->first();
                                // dd($listCartDetail);
                if ($listCartDetail) {
                    $quanity = DB::table('cartdetail')
                        ->where('id', intval($listCartDetail->id))
                        ->first();
                    $q= $quanity->quanity;
                        $updateQuanity = DB::table('cartdetail')
                                        ->where('id', intval($listCartDetail->id))
                                        ->update(['quanity' => intval($q)+1]);
                        // dd($updateQuanity);
                } else {
                    $updateQuanity = DB::table('cartdetail')->insert([
                                        'quanity' => 1,
                                        'cartid' => intval($cartid),
                                        'productid' => intval($id),
                                    ]);
                    // dd($updateQuanity);
                }
            $count = DB::table('cartdetail')->where('cartid',$cartid)->count();
            // dd($count);
                return $count;
        }

        return -1;
    }
    
    public function order() 
    {   
        
        $user = DB::table('user')
        ->where('id', intval(Auth::User()->id))
        ->first();
        // dd($user);
        $cart = DB::table('cart')->where('userid',$user->id)->first();
        
        // dd($cart);
        $idCart = $cart->id;
        $cartAll = DB::table('cartdetail')
            ->join('product', 'cartdetail.productid', '=', 'product.id')
            ->join('cart', 'cart.id', '=', 'cartdetail.cartid')
            ->select('cartdetail.id','cartdetail.quanity' ,'cartdetail.productid','product.name','product.image','product.price')
            ->where('cartdetail.cartid',$idCart)
            ->where('cartdetail.quanity','>',0)
            ->get();
        // dd($cartAll);
        $totalPrice[0]=0;
        foreach ($cartAll as $key) {
            $totalPrice[0] += $key->price *$key->quanity;
        }
        return view('web.order')->with(['cartAll'=> $cartAll,'totalPrice'=> $totalPrice,'user'=> $user]);
    }
    
    public function postOrder(Request $request) 
    {
            
        $user = DB::table('user')
                ->where('id', intval(Auth::User()->id))
                ->first();
        
        $cart = DB::table('cart')->where('userid',$user->id)->first();
 
        // dd($cart);
        $idCart = $cart->id;
        $cartAll = DB::table('cartdetail')
            ->join('product', 'cartdetail.productid', '=', 'product.id')
            ->join('cart', 'cart.id', '=', 'cartdetail.cartid')
            ->select('cartdetail.id','cartdetail.quanity' ,'cartdetail.productid','product.name','product.image','product.price')
            ->where('cartdetail.cartid',$idCart)
            ->get();
        // dd($cartAll);
        $totalPrice[0]=0;
        foreach ($cartAll as $key) {
            $totalPrice[0] += $key->price *$key->quanity;
        }
        $order = DB::table('order')
                ->where('userid',$user->id)
                ->orderBy('id', 'desc')
                ->first(); 
                
        $date =Carbon::now();
        $deliverydate = Carbon::tomorrow();
        DB::table('order')->insert([
            'address'=>$request['address'],
            'receiver'=>$request['username'],
            'email'=>$request['email'],
            'phonenumber'=>$request['phonenumber'],
            'userid'=>$user->id,
            'totalmoney'=>$totalPrice[0],
            'note'=>$request['note'],
            'date'=>$date,
            'deliverydate'=>$deliverydate,
            'paymentmethod'=>$request['paymentmethod'],
        ]);
        $order = DB::table('order')
                ->where('userid',$user->id)
                ->orderBy('id', 'desc')
                ->first(); 
        // dd($cartAll->quanity);
        foreach($cartAll as $c){
            DB::table('orderdetail')->insert([
                'quantity'=>$c->quanity,
                'orderid'=>$order->id,
                'productid'=>$c->productid,
            ]);
        }
        
        $c = DB::table('cartdetail')
                ->where('cartid', intval($idCart))
                ->delete();
            return redirect()->action('webController@listOrder');
    }

    public function listOrder() {

        $user = DB::table('user')
        ->where('id', intval(Auth::User()->id))
        ->first();
        // dd($user);
        $order = DB::table('order')->where('userid',$user->id)->get();
        return view('web.listOrder')->with(['order'=> $order]);
    }
    public function orderDetail($id) {

        $orderDetail = DB::table('orderdetail')
            ->join('product', 'orderdetail.productid', '=', 'product.id')
            ->select('orderdetail.id','orderdetail.quantity' ,'orderdetail.productid','product.name','product.image','product.price')
            ->where('orderdetail.orderid',$id)
            ->get();

            return view('web.orderDetail')->with(['orderDetail'=> $orderDetail]);
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
    
    //controller for UserCreate
    public function getRegister() {
        return view('web.register');
    }
    public function logout() {
        Auth::logout();
        return redirect()->back();
    }
    public function profileUser() {
        return view('web.profile');
    }
    public function getPartner() {
        return view('web.partner');
    }
    public function getPartnerCs() {
        return view('web.partnerSuccess');
    }
    public function postContact(Request $request) {
        $cont = $request->all();
        DB::table('contact')->insert([
            'email'=>$cont['email'],
            'name'=>$cont['name'],
            'message'=>$cont['message']
        ]);
        return redirect()->action('webController@postContact');
    }
    public function editUser(){
        if(Auth::User()){
            $user=User::find(Auth::user()->id);
            if($user){
                return view('web.profile')->withUser($user);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
    public function update(Request $req){
        $user=User::find(Auth::user()->id);
        if($user){
            $validate=$req->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phonenumber' => ['required','numeric','digits_between:9,11',],
            'birthday' => ['required','before:now'],
            'address' => ['required', 'string', 'max:255'],
            ]);
            $user->password= Hash::make($req['password']);
            $user->name=$req['name'];
            $user->birthday=$req['birthday'];
            $user->address=$req['address'];
            $user->phonenumber=$req['phonenumber'];
            $user->save();
            return redirect()->back();
        }else{
            redirect()->back();
        }
    }
    public function editPartner(){
        if(Auth::User()){
            $user=User::find(Auth::user()->id);
            if($user){
                return view('web.partner')->withUser($user);
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
    public function updatePartner(Request $req){
        $user=User::find(Auth::user()->id);
        if($user){
            $user->role=$req['role'];
            $user->img1=$req['img1'];
            $user->img2=$req['img2'];
            $user->save();
            return view('web.partnerSuccess');
        }else{
            redirect()->back();
        }
    }

// Controller for event start
public function event() {
    $event = DB::table('event')->where('status','Approved')->orderByDesc('id')->paginate(3);
    $eventtop = DB::table('event')->where('status','Approved')->where('fromdate','>',now())->orderBy('fromdate','asc')->first();
    return view('web.event')->with(['event'=>$event, 'eventtop'=>$eventtop]);
}
public function eventClick($id) {
    DB::table('event')
        ->where('id', intval($id))
        ->increment('views',1);
    DB::table('event')
        ->where('id', intval($id))
        ->increment('totaldept',0.02);
    return redirect('web/eventDetail/'.$id);
}
public function eventDetail($id) {
    $eventD = DB::table('event')->where('id',intval($id))->first();
    return view('web.eventDetail')->with(['eventD'=>$eventD]);
}
public function eventCreate($id) {
    $user = DB::table('user')
    ->where('id', intval($id))
    ->first();
return view('web.eventCreate')->with(['user'=>$user]);
}
public function postEventCreate(Request $request,$id) {
    $events = $request->all();    
    // xử lý upload hình vào thư mục
    if($request->hasFile('image1'))
    {
        $file=$request->file('image1');
        $extension = $file->getClientOriginalExtension();
        if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
        {
            return redirect('web/eventCreate/'.$id)->with('alert','You can only choose file have tail jpg,png,jpeg');
        }
        $imageName = $file->getClientOriginalName();
        $file->move("images",$imageName);
    }
    else
    {
        $imageName = null;
    }   
    DB::table('event')->insert([
        'userid'      =>intval($id),
        'registerdate'=>$events['eventregister'],
        'url1'        =>$events['eventlink'],
        'name'        =>$events['eventname'],
        'fromdate'    =>$events['eventfromdate'],
        'todate'      =>$events['eventtodate'],
        'address'     =>$events['eventaddress'],
        'ticketprice' =>$events['eventprice'],
        'type'        =>$events['eventtype'],
        'artist'      =>$events['eventartist'],
        'description' =>$events['eventdescription'],
        'url2'        =>$imageName,
            ]);
    return redirect('web/eventManagerment/'.$id)->with('alert','Congratulation!!You Have Create Event Successfully, Wait for admin to approve your Event.');
}
public function eventManagerment($id) {
    $users = DB::table('user')->where('id', intval($id))
    ->first();
    $eventmana = DB::table('user')->join('event','user.id','=','event.userid')->select('user.*','event.*')
    ->where('user.id', intval($id))->where('event.status','Approved')->orwhere('user.id', intval($id))->where('event.status','Canceled')
    ->get();
    $eventmana1 = DB::table('user')->join('event','user.id','=','event.userid')->select('user.*','event.*')
    ->where('user.id', intval($id))->where('event.status','Processing')
    ->get();
return view('web.eventManagerment')->with(['users'=>$users,'eventmana'=>$eventmana,'eventmana1'=>$eventmana1]);
}
public function eventPaUp($id,$id1) {
    $eventpaup = DB::table('event')
    ->where('id', intval($id1))
    ->first();
return view('web.eventPartnerUpdate', ['eventpaup'=>$eventpaup]);
}
public function postEventPaUp(Request $request, $id, $id1) {
    $eventpaup = $request->all();    
    // xử lý upload hình vào thư mục
    if($request->hasFile('image'))
    {
        $file=$request->file('image');
        $extension = $file->getClientOriginalExtension();
        if($extension != 'jpg' && $extension != 'png' && $extension !='jpeg')
        {
            return redirect('web/eventPaUp'.$id)->with('alert','You can only choose file have tail jpg,png,jpeg');
        }
        $imageName = $file->getClientOriginalName();
        $file->move("public/images",$imageName);
    } else { // không upload hình mới => giữ lại hình cũ
        $e = DB::table('event')
            ->where('id', intval($id))
            ->first();
        $imageName = $e->url2;
    }
    DB::table('event')->where('id',intval($id1))->update([
        'url1'        =>$eventpaup['link'],
        'name'        =>$eventpaup['name'],
        'fromdate'    =>$eventpaup['fromdate'],
        'todate'      =>$eventpaup['todate'],
        'address'     =>$eventpaup['address'],
        'ticketprice' =>$eventpaup['price'],
        'type'        =>$eventpaup['type'],
        'artist'      =>$eventpaup['artist'],
        'description' =>$eventpaup['description'],
        'url2'        =>$imageName,
            ]);
    return redirect('web/eventManagerment/'.$id)->with('alert','Congratulation!!You Have Update Event Successfully, Wait for admin to approve your Event.');
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