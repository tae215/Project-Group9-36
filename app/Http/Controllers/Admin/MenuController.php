<?php

namespace App\Http\Controllers\Admin;

use App\menu;
use App\Http\Controllers\Controller;
use App\types;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

class MenuController extends Controller
{
    public function index()
    {

        $types = types::all();
        return view('admin.menu.index', [
            'types' => $types
        ]);
    }




    public function create(Request $request)
    {

        $validateData = $request->validate(
            [
                'text' => 'required',
                'status' => 'required',

                'id_types' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'text.required' => 'กรุณาป้อนชื่อเมนู',
                'status.required' => 'กรุณาป้อนสถานะสินค้า',

                'id_types.required' => 'กรุณาป้อนชื่อประเภท',
                'image.mimes' => 'กรุณาใส่รูปภาพที่เป็นนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'กรุณาอัพโหลดไฟล์รูปภาพ',
                'image.max' => 'กรุณาอัพโหลดไฟล์ขนาดไม่เกิน 10 MB',
            ]
        );


        $menu = new menu();
        $menu->text = $request->text;
        $menu->status = $request->status;
        $menu->id_user = auth()->id();
        $menu->id_types = $request->id_types;


        if ($request->hasFile('image')) {
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $menu->image = $filemane;
        } else {
            $menu->image = 'nopic.png';
        }
        $menu->save();
        return redirect('/admin/menu/index');
    }
    public function edit($id)
    {
        $editmenu = Menu::find($id);
        $types = types::all();
        return view('admin.menu.edit', compact('editmenu', 'types'));
    }
    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'text' => 'required',
                'status' => 'required',

                'id_types' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'text.required' => 'กรุณาป้อนชื่อเมนู',
                'status.required' => 'กรุณาป้อนสถานะสินค้า',

                'id_types.required' => 'กรุณาป้อนชื่อประเภท',
                'image.mimes' => 'กรุณาใส่รูปภาพที่เป็นนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'กรุณาอัพโหลดไฟล์รูปภาพ',
                'image.max' => 'กรุณาอัพโหลดไฟล์ขนาดไม่เกิน 10 MB',
            ]

        );


        $menu = Menu::find($id);

        $menu->text = $request->text;
        $menu->status = $request->status;
        $menu->id_user = auth()->id();
        $menu->id_types = $request->id_types;

        if ($request->hasFile('image')) {
            if ($menu->image != 'nopic.png') {
                File::delete(public_path() . '/admin/images/' . $menu->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $menu->image = $filemane;
        }
        $menu->save();
        return redirect('/admin/menu/addindex');
    }

    public function delete($id)
    {
        $delete = Menu::find($id);
        if ($delete->image != 'nopic.png') {
            File::delete(public_path() . '/admin/images/' . $delete->image);
        }
        $delete->delete();
        return redirect('/admin/menu/addindex');
    }
}
