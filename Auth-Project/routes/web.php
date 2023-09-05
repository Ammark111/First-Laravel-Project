<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\MainController;
use App\Http\controllers\otherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[MainController::class,'index'])->name('home');
Route::get('/login',[MainController::class,'login'])->name('login');
Route::get('/register',[MainController::class,'register'])->name('register');
Route::get('/userList',[MainController::class,'showUser'])->name('userList');
Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');

Route::get('/product',[otherController::class,'show_product1'])->name('product');
Route::get('/index',[otherController::class,'showproduct2'])->name('home');
Route::get('/loading',[otherController::class,'loading'])->name('loading');
Route::get('delete/{id}',[otherController::class,'delete'])->name('delete');
Route::get('delete_cart/{id}',[otherController::class,'delete_cart'])->name('delete_cart');   
Route::get('edit/{id}',[otherController::class,'edit'])->name('edit');
// Route::get('edit_cart/{id}',[otherController::class,'edit_cart'])->name('edit_cart');
Route::get('/cart',[otherController::class,'show_cart'])->name('cart');

Route::post('/newUser',[MainController::class,'newUser'])-> name('newUser');

Route::post('/userlogin',[otherController::class,'userlogin'])-> name('userlogin');
Route::post('/product',[otherController::class,'add_product'])->name('product');
Route::post('/cart',[otherController::class,'add_cart'])->name('cart');
Route::post('/loading',[otherController::class,'loading'])->name('loading');

Route::put('update/{id}',[otherController::class,'update'])->name('update');
// Route::put('update_cart/{id}',[otherController::class,'update_cart'])->name('update_cart');  
