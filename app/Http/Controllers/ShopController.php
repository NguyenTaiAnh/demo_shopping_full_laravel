<?php

namespace App\Http\Controllers;

use App\Address;
use App\Cart;
use App\Discount;
use App\Item;
use App\Order;
use App\Order_status;
use App\Pay_type;
use App\Product;
use App\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Session;
use App\Image;
class ShopController extends Controller
{
    public function getindex(){
        return view('Page.index');
    }
    public function getshop(){
        $product = Product::where('user_id',1)->paginate(9);
        return view('page.shop',compact('product'));
    }
    public function getblog(){
        return view('page.blog');
    }
    public function geterror(){
        return view('page.error404');
    }
    public function getabout(){
        return view('page.about');
    }
    public function getcontact(){
        return view('page.contact');
    }
    public function getwishlist(){
        return view('page.wishlist');
    }
    public function getsign(){
        return view('page.sign');
    }
    public function getcart(){
        return view('page.cart');
    }

    public function search(Request $request){
        $key = $request->key;

        // vs phương thức like thì ta dùng like % , nếu like ko thì mình phải nhập đúng tên thì nó mới tìm kiếm được
        // thay vào đó mình sẽ nhập % vào nó sẽ tìm kiếm cho mình
        // dùng toán tử nối chuỗi để nối 2 cái % và cái key mình nhập vào
        // or là tìm kiếm theo giá dùng phương thức  orWhere : dùng tìm kiếm theo tên or tìm kiếm theo giá

        $product = Product::where( 'name','like',"%$key%")
                         ->paginate(10);
        return view('Page.search',compact('product','key'));

    }

    public function getaccount(){

        $user = \auth()->user();
        $orders = Order::where('user_id','=',$user->id)->get();

        return view('page.account',compact('orders'));
    }
    public function getViewOrder($id)
    {
        $order = Order::find($id);
        $paytype = Pay_type::where('id','=', $order->pay_type_id)->first();
        $shipping = Shipping::where('id','=', $order->shipping_id)->first();
        $address = Address::where('id', '=', $order->address_id)->first();
        $products = Product::all();
//        dd($address);
        return view('Page.vieworder', compact('order', 'paytype', 'shipping', 'address', 'products'));
    }


    public function getadmin(){
        return view('layouts.admin');
    }
    public function getsproduct($id,Request $request){

        $product = Product::find($id);
        $products = Product::where('category_id',$request->categpry_id)->where('id','!=',$id)->get();
        $id =1;
        return view('page.sign_product',compact('product','products','id'));

//        $product = Product::where('user_id',1)->first();
//        return view('page.sign_product',compact('product'));
    }
//    public function getAdd($id , Request $request){
//        $product = Product::find($id);
//        //? toán tử bào hồi
//        $oldCart = Session('cart')?Session::get('cart'):null;
//        $cart = new Cart($oldCart);
//        $cart -> add($product,$id);
//        //dùng phương thức put để thêm vào
//        $request->session()->put('cart',$cart);
//        return redirect()->back();
//    }

//-------------------------checkout--------------------------------

    public function getCheckout(Request $request)
    {
        $codedata = null;
        if (isset($request['discountcode']))
        {
            if ($discount = Discount::where('code', '=', $request['discountcode'])->first())
            {
                $now = Carbon::now();
                if(Carbon::parse($discount->time_start)->lte($now) && Carbon::parse($discount->time_end)->gt($now)){
                    $codedata = $discount;
                }
                else
                {
                    $codedata = null;
                }
            }
        }
        $paytypes = Pay_type::all();
        $shippings = Shipping::all();
        $curaddress = false;
        $address = null;
        if (auth()->check()){
            $user = \auth()->user();
            $curaddress = Address::where('user_id','=',$user->id)->exists();
            if ($curaddress == true)
            {
                $address = Address::where('user_id','=',$user->id)->get();
            }

        }
        return view('Page.checkout', compact('paytypes', 'codedata', 'shippings', 'curaddress', 'address'));

    }


    //--------------------------place Order -------------------------------------
    public function placeOrder(Request $request)
    {
//
        $user = null;
        if (auth()->check()){
            $user = \auth()->user();
        }
//        total item
        $total = 0;
        $itemid = (array)$request->itemid;
        $itemprice = (array)$request->price;
        $itemquantity = (array)$request->quantity;
        for ($i=0; $i < count($itemid); $i++) {
            $total = $itemprice[$i]*$itemquantity[$i];
        }
//        discount
        if ($request['couponcodepercent'] > 0)
        {
            $discount = $total*($request['couponcodepercent']/100);
            $total -= $discount;
        }
//        order
        $order = new Order();
        $order->code = date("Ymd") . strtoupper(substr(uniqid(sha1(time())),0,4));
        $order->discount_id = $request['couponid'];
        $order->total = $total;


        if($user != null) {
            $order->user_id = $user->id;
        }
        else{
            $order->user_id = null;
        }
//        dump($order->discount_id);

        $order->address_id = 0;
        $order->paystatus = "None";
        $order->pay_type_id = $request['payment'];
        $order->shipping_id = $request['shipping'];
        $order->save();

//        address
        if ($request['curaddress'] == "none") {
            $address = new Address();
            $address->province = $request['province'];
            $address->district = $request['town'];
            $address->ward = $request['country'];
            $address->village = $request['state'];
            $address->address = $request['address'];
            $address->phone = $request['phone'];

            if ($user != null) {
                $address->user_id = $user->id;
            } else {
                $address->user_id = null;
            }
            $address->order_id = $order->id;
            $address->save();
            $order->update(['address_id'=>$address->id]);
        }
        else{
            $order->update(['address_id'=>$request['curaddress']]);
        }

//        orderstatus
        $orderstatus = new Order_status();
        $orderstatus->name = "New";
        $orderstatus->order_id = $order->id;
        $orderstatus->save();
//        item
        for ($i=0; $i < count($itemid); $i++) {
            $item = new Item();
            $item->product_id = $itemid[$i];
            $item->amount = $itemquantity[$i];
            $item->price = $itemprice[$i];
            $item->price_sale = $itemprice[$i];
            $item->order_id = $order->id;
            $item->save();
        }
        session()->forget('cart');
        $paytype = Pay_type::where('id','=', $request['payment'])->first();
        $shipping = Shipping::where('id','=', $request['shipping'])->first();
        return view('Page.placeorder', compact('order', 'paytype', 'shipping','orderstatus'));
    }

}
