<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
    public function viewDashboard(){
        return view("admin.pages.dashboard");
    } public function viewAddProduct(){
        return view("admin.pages.addProduct");
    }
}
