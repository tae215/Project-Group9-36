<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\types;
use Illuminate\Support\Str;
use Image;
use File;

class addtypeController extends Controller
{
    public function index(){

        $type = Types::all();
        return view('admin.type.addindex',compact('type'));
    }

}
