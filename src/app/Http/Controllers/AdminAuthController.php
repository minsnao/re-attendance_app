<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function adminLogin()
    {
        return view('admin.login');
    }

    // ログイン、ログアウト処理
    public function login()
    {
        //
    }

    public function logout()
    {
        //
    }
}
