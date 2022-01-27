<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Body extends Controller
{
    public function index(){
        return view('admin.body.index');
    }
}
