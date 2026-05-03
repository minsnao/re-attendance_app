<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffUserController extends Controller
{
    public function index() {
        return view('admin.staffs_list');
    }
}
