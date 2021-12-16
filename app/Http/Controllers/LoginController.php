<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("/auth/login");
    }

    public function post_login(Request $request)
    {
        if(Auth::attempt([
        "email" =>$request->email,
        "password" => $request->password
        ])) {
            $request->session()->regenerate();

            return redirect()->intended("/admin/dashboard");
        }else{
            return redirect()->back();
        }
    }


    public function logout()
    {
        Auth::logout();

        return redirect("/admin/login");
    }
}
