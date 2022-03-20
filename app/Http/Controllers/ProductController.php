<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use session;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    //
    function productList(){
    $data=Product::all();
    return view('product',['products'=>$data]);
    }
    function home(){
        $data=Product::all();
    return view('product',['products'=>$data]);

    }
    function details($id){
        $data= Product::find($id);
        return view('product_detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart= new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        
        }
        return redirect('login'); 
    }
    static function cartItem(){
        $userId= session()->get('user') ['id'];
        return Cart::where('user_id',$userId)->count();

    }
    function cartList(){
        $userId=session()->get('user') ['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','product_id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
       // return view('cartlist');
        return view('cartlist',['products'=>$products]);

    }
    function removecart($id){
        Cart::destroy($id);
        return redirect('cartlist');

    }
    function orderNow(){
        $userId=session()->get('user') ['id'];
       $total=  $products= DB::table('cart')
        ->join('products','cart.product_id','=','product_id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
       // return view('cartlist');
        return view('ordernow',['total'=>$total]); 


    } 
    function orderplace(Request $req){
        $userId=session()->get('user') ['id'];
        $allcart=Cart::where('user_id',$userId)->get();
         foreach($allcart as $cart){
    
        $data= new Order();
        $data->product_id=$cart['product_id'];
        $data->user_id=$cart['user_id'];
        $data->status="pending";
        $data->payment_method=$req->payment;
        $data->payment_status='pending';
        $data->address=$req->address;
        $data->save();
        Cart::where('user_id',$userId)->delete();
         }
         $req->input();
         return redirect('/');

    }
    function MyOrders(){
        $userId=Session()->get('user') ['id'];
       $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('/myorders',['myorder'=>$orders]);

        
    }

}
