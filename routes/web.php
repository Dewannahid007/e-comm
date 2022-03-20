<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route::get('/',[EcommerceController::class,'index']);

route::get('home',function(){
    return view('/');
});
route::get('/logout',function(){
    session()->forget('user');
    return redirect('/login');
});
Route::post('/login',[EcommerceController::class,'loginF']);
route::view('login','login');
route::view('registration','registration');
route::post('registrationF',[EcommerceController::class,'regi']);
route::get('product',[ProductController::class,'productList']);
route::get('/',[ProductController::class,'home']);
route::get('detail/{id}',[ProductController::class,'details']);
route::post('/add_to_cart',[ProductController::class,'addToCart']);
route::get('cartlist',[ProductController::class,'cartList']);
route::get('/removecart/{id}',[ProductController::class,'removecart']);
Route::get('/ordernow',[ProductController::class,'orderNow']);
route::post('/orderplace',[ProductController::class,'orderplace']);
route::get('/myorders',[ProductController::class,'MyOrders']);