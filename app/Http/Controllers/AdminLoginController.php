<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;//sd hash
use Illuminate\Http\Request;
use App\Models\nguoidung;

class AdminLoginController extends Controller
{
    public function viewLogin(){
        return view("admin.pages.login");
    }
    public function checkLogin(Request $request){
        $admin=nguoidung::firstWhere('taikhoan','=',$request->taikhoan);
        if($admin && $admin->chucvu=="admin" && Hash::check($request->matkhau,$admin->matkhau)){
            session()->put("admin_login",$admin->tennd);
            return redirect("/admin/dashboard");
        }
        //neu sai
        session()->put("error","Sai tai khoan hoac mat khau!");
        return back();
    }
      public function logout(){
          session()->put("admin_login",null);
            return redirect("/admin/login");
    }
}
