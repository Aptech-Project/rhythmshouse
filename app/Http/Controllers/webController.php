<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Session;
class webController extends Controller
{
    public function index() {
        $evt = DB::table('event')->where('status','Approved')->where('fromdate','>',now())->orderBy('fromdate','asc')->take(6)->get();
        $evttop = DB::table('event')->where('status','Approved')->where('fromdate','>',now())->orderBy('fromdate','asc')->first();
        return view('web.index')->with(['evt'=>$evt,'evttop'=>$evttop]);
    }

// Controller for product start
    public function product() {
        $products = DB::table('product')->get();
        return view('web.product')->with(['products'=>$products]);
    }
    public function productDetail() {
        return view('web.productDetail');
    }
    //phong
    public function cart($id) {
        $cart = DB::table('cart')->where('userid',$id)->first();
        $idCart = $cart->id;
        $cartdetail = DB::table('cartdetail')
            ->join('product', 'cartdetail.productid', '=', 'product.id')
            ->join('cart', 'cart.id', '=', 'cartdetail.cartid')
            ->select('cartdetail.*', 'product.*')
            ->where('cartdetail.cartid',$idCart)
            ->get();
        // dd($cartdetail);
        $totalPrice[0]=0;
        foreach ($cartdetail as $key) {
            $totalPrice[0] += $key->price *$key->quanity;
        }
        // dd($totalPrice);    
        return view('web.cart')->with(['cartdetail'=> $cartdetail,'totalPrice'=> $totalPrice]);
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
    
    //controller for UserCreate
    public function getRegister() {
        return view('web.register');
    }
    public function logout() {
        Auth::logout();
        return view('web.index');
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
    return redirect()->action('webController@eventManagerment')->with('alert','Congratulation!!You Have Create Event Successfully, Wait for admin to approve your Event.');
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
public function eventPaUp($id) {
    $eventpaup = DB::table('event')
    ->where('id', intval($id))
    ->first();
return view('web.eventPartnerUpdate', ['eventpaup'=>$eventpaup]);
}
public function postEventPaUp(Request $request, $id) {
    $eventuser = DB::table('user')->get();
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
    DB::table('event')->where('id',intval($id))->update([
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
    return redirect()->action('webController@eventManagerment')->with('alert','Congratulation!!You Have Update Event Successfully, Wait for admin to approve your Event.');
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