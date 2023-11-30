<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchController extends Controller
{
    public function index()
    {
        //
        $data = Product::all();
        return view('merch/index')->with('data', $data);
    }
    
    public function cart()
    {
        $id = Auth::user()->id;
        $cart = cart::where('user_id','=',$id)->get();
        return view('merch/cart')->with('cart', $cart);
    }
    public function detailorder()
    {
        $id = Auth::user()->id;
        $order = Order::where('user_id','=',$id)->get();
        return view('merch/detailorder')->with('order', $order);;
        
    }

    public function edit(String $id)
    {
        //
        $data = Product::where('id',$id)->first();
        return view('merch/detail')->with('data', $data);
    }
    
    public function add_cart( $id)
    {
        $user = Auth::user();
        $product=Product::where('id',$id)->first();
       
        $cart = new cart;

        $cart ->name = $user->name;
        $cart ->title = $product->nama_product;
        $cart ->price = $product->harga_product;
        $cart ->image = $product->foto_product;
        $cart ->product_id = $user->id;
        $cart ->user_id = $user->id;

        $cart->save();

        

        return redirect()->back()->with('succes','Berhasil Masukkan Ke Keranjang');
    }

    public function remove_cart($id){
        $cart=cart::find($id);
        $cart->delete();
        return redirect()->back();
    
    }
    public function order(){
        $user=Auth::user();
        $user_id=$user->id;
        $data=cart::where('user_id','=',$user_id)->get();
        foreach($data as $data){

            $order = new order;
            $order ->name = $data->name;
            $order ->title = $data->title;
            $order ->price = $data->price;
            $order ->image = $data->image;
            $order ->delivery_status = "Dikemas";
            $order ->product_id = $data->product_id;
            $order ->user_id = $data->user_id;

            $order->save();

            $cart_id=$data->id;
            $cart = cart::find($cart_id);
            $cart->delete();

        }

        return redirect()->back();
    }
    
}
