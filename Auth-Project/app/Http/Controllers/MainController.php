<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class MainController extends Controller
{
    public function index() {
        return view('web.index');
    }

    // public function login() {
    //     return view('web.auth.login');
    // }

    public function register() {
        return view('web.auth.register');
    }

    public function showUser() {
        $datas = user::all();
        return view('web.admin',compact('datas'));
    }

    public function newUser(Request $request) {

        $post = new user();
        $post->full_name = $request->name;
        $post->phone_number = $request->phone_number;
        $post->password = $request->password;
        $post->save();
        return view('web.index');
     
    }

    public function dashboard() {
        return view('web.dashboard');
    }

    public function product() {
        return view('web.product');
    }

    public function login(Request $request) {

        // if($request->method()=='POST'){

        //         $request->validate([
        //             'password' => 'required',
        //             'phone' => 'required|max:10 | min:10 |exists:users'
        //         ]);

        //         $user = User::where('phone', $request->phone)->first();
        //         if(!Hash::check($request->password,$user->password)){
        //             return back()->with('error','password do not match');
        //         }

        //         auth()->login($user);

        //         return redirect()->route('login');
        // }

        return view('web.auth.login');
    }


 





   
      
}
