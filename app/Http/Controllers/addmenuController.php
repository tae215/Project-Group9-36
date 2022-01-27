<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\menu;

class addmenuController extends Controller
{
    public function index(){
        $menu = menu::all();
        return view('admin.menu.addindex',compact('menu'));
    }
}
