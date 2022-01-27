<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\menu;
use Illuminate\Support\Str;
use Image;
use File;
use Illuminate\Support\Facades\Hash;

class FontendController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('welcome',compact('menu'));
    }
}
