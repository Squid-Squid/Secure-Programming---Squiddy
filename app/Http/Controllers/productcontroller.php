<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    function index(){
        $data = Product::all();

        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['products'=>$data]);
    }
    function search(Request $req){
        #return $req->input();
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    function brandsearch($name){
        #return $req->input();
        $data = Product::where('name', 'like', '%'.$name.'%')->get();
        return view('search',['products'=>$data]);
    }
    function addtocart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('login');
        }
        
    }
    static function cartitem(){
        $userid = Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
        
       
    }
    function cartlist(){
        $userid = Session::get('user')['id'];
        $products= DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userid)->select('products.*','cart.id as cart_id')->get();
        return view('cartlist',['products'=>$products]);
    }
    function removeitem($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function checkout(){
        $userid = Session::get('user')['id'];
        $total = $products= DB::table('cart')->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', $userid)->select('products.*','cart.id as cart_id')->sum('products.price');
        return view('checkout',['total'=>$total]);

    }
    function order(Request $req){

        $userid = Session::get('user')['id'];
        $cartitem= Cart::where('user_id', $userid)->get();
        foreach($cartitem as $cart){
            $order = new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="processed";
            $order->payment_method=$req->payment;
            $order->payment_status="processed";
            $order->address=$req->address;
            $order->save();
            $cartitem= Cart::where('user_id', $userid)->delete();
        }
        return redirect('/');
    }
}
