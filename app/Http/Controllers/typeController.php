<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\types;
use Illuminate\Support\Str;
use Image;
use File;

class typeController extends Controller
{
    public function index(){

        return view('admin.type.index');
    }
    public function createtype(Request $request){



        $type = new types();
        $type->text = $request->text;
        $type->id_user = auth()->id();

        $type->save();
        return redirect('/admin/type/index');
    }
    public function edittype($id){
        $edittype = Types::find($id);
        return view ('admin.type.edit',compact('edittype'));
    }
    public function updatetype(Request $request, $id){


  {
        $type = Types::find($id);
        $type->text = $request->text;
        $type->id_user = auth()->id();
    }
    $type->save();
    return redirect('/admin/type/addindex');
    }

    public function deletetype($id){
        $deletetype = Types::find($id);

        $deletetype->delete();
        return redirect('/admin/type/addindex');
    }
}
