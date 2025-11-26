<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //
    public function viewBicycles(){
        return view("user.pages.bicycles");
    }
    public function viewDetail(Request $request){
        $id=$request->id;
        return view("user.pages.detail");
    }
}
