<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function home(){
        $products=Products::take(6)->get();

        return view("user.pages.home",
        ["products"=>$products]);
    }
    public function contact(){

        return view("user.pages.contact");
    }
}
