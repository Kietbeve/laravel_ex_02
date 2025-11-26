<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;


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

Route::prefix("admin")->group(function(){
//Dang nhap admin
Route::get("login",[AdminLoginController::class,"viewLogin"]);
Route::post("login",[AdminLoginController::class,"checkLogin"]);
Route::get("logout",[AdminLoginController::class,"logout"]);

//--Phan he admin
// Route::get(,[AdminController::class,"viewDashboard"]);
route::middleware("HasAdminLogin")->group(function(){
Route::get("dashboard",[AdminController::class,"viewDashboard"]);
Route::get("addProduct",[AdminController::class,"viewAddProduct"]);
});
//--Het phan admin
});

