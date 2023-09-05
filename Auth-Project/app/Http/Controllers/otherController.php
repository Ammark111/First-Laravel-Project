<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\product_list;
use App\Models\order_list;
use App\Models\User;
use App\Models\cart;


class otherController extends Controller
{
    public function add_product(Request $req) {
        $upload = new product_list();
        $upload-> product_title = $req->title;
        $upload-> description = $req->description;
        $upload-> original_price = $req->oprice;
        $upload-> current_price = $req->cprice;
        $upload->save();
        return redirect()->back()->with('success', 'Product Added Successfully');
    }

    public function show_product1() {
        $products = product_list::all();
        return view('web.product',compact('products'));
    }

    public function showproduct2() {
        $productz = product_list::all();
        return view('web.index',compact('productz'));
    }

    public function delete($id) {
        $upload = product_list::find($id);
        $upload -> delete();
        return redirect()->back()->with('danger', 'Product Removed Successfully');
    }

    public function edit($id) {
        $product = product_list::find($id);
        return view('web.edit_product',compact('product'));
    }

    public function update(Request $req,$id) {
        $upload = product_list::find($id);
        $upload-> product_title = $req->title;
        $upload-> description = $req->description;
        $upload-> original_price = $req->oprice;
        $upload-> current_price = $req->cprice;
        $upload -> update();
        return redirect()->back()->with('edit', 'Changes Saved successfully');
        // return $upload;
    }

    public function userlogin(Request $req)
    {
        // $phone = $req->input('phone'); 
        // $pass = $req->input('password'); 
        // $hashedPassword = Hash::make($pass);
        // $user = User::where('phone_number',$phone)->where('password',$hashedPassword);
        // if($user)
        // {
        //     return "welcome";
        // }

        // else 
        // {
        //     return "hakuna mtu";
        // }

        
    $phone = $req->input('phone');
    $pass = $req->input('password');

    // Retrieve the user based on the phone number
    $user = User::where('phone_number', $phone)->first();

    if ($user && Hash::check($pass, $user->password)) {
        return "Welcome"; // Passwords match
    } else {
        return back()->with('danger','Invalid credentials'); // User doesn't exist or password doesn't match
    }
     
    }

    public function cart() {
        return view('web.cart');
    }

    
    public function add_cart(Request $req) {
        $size = $req->size;
        $price = $req->price;
        $color = $req->color;
        $title = $req->title;
        $quantity  = $req->quantity;

        $cart = new order_list();
        $cart->product_title = $title;
        $cart->price = $price;
        $cart->size = $size;   
        $cart->color = $color;
        $cart->quantity = $quantity;
        $cart->save();     

        // return $cart;
        // return view('web.index');
        return redirect()->to('cart');
    }

    public function show_cart() {
       $orders = order_list::all();
       return view('web.cart',compact('orders'));

    }

    public function delete_cart($id) {
        $order = order_list::find($id);
        $order -> delete();
        return redirect()->back()->with('danger', 'Product Removed successfully');
    }

    public function edit_cart($id) {
        $order = product_list::find($id);
        return view('web.cart',compact('order'));
    }

    // public function update_cart(Request $req,$id) {
    //     $size = $req->size;
    //     $price = $req->price;
    //     $color = $req->color;
    //     $title = $req->title;
    //     $quantity  = $req->quantity;

    //     $cart = new order_list();
    //     $cart->product_title = $title;
    //     $cart->price = $price;
    //     $cart->size = $size;   
    //     $cart->color = $color;
    //     $cart->quantity = $quantity;
    //     $order-> update();
    //     return redirect()->back();
    // }

    public function loading(Request $req) {

        $phone = $req->phone;
        $Newphone = ltrim($phone,'0');
        $tzcode = 255;
        $Newphone =$tzcode.$Newphone;

        $pay = new cart();
        $pay->phone = $Newphone;
        $pay->amount = $req->amount;

        return $pay;

        // return view('web.loading');
    }
}