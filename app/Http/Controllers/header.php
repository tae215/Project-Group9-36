<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class header extends Controller
{
    public function index(){
        return view('admin.header.index');
    }
}
