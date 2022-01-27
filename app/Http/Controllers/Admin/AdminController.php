<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $menu = menu::all();
        return view('admin.index',compact('menu'));
    }
}
