<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

//--Phan he nguoi dung
    //Trang chu
    Route::get("/",[HomeController::class,"home"]);
    Route::get("/home",[HomeController::class,"home"]);
    //Trang lien he
    //trang danh sach
    Route::get("/contact",[HomeController::class,"contact"]);
    //trang danh sach
    Route::get("/bicycles",[ProductController::class,"viewBicycles"]);
    //trang chi tiet san pham
    Route::get("/detail/{id}",[ProductController::class,"viewDetail"]);
    //Trang gio hang
    //trang danh sach
    Route::get("/cart",[CartController::class,"viewCart"]);
//--Het phan he nguoi dung
