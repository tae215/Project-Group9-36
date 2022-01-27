<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class source extends Controller
{
    public function index(){
        return view('admin.source.index');
    }
}
