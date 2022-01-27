<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Str;
use Image;
use File;
use Illuminate\Support\Facades\Hash;

class adduserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    public function edituser($id)
    {
        $edituser = User::find($id);
        return view('admin.user.edit', compact('edituser'));
    }
    public function updateuser(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'username' => 'required',
                'name' => 'required',
                'email' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'password' => 'required',
            ],
            [
                'username.required' => 'กรุณาป้อนชื่อผู้ใช้',
                'name.required' => 'กรุณาป้อนชื่อจริง',

                'email.required' => 'กรุณาป้อนEmail',
                'address.required' => 'กรุณาป้อนที่อยู่',
                'phone.required' => 'กรุณาป้อนเบอร์โทรศัพท์',
                'password.required' => 'กรุณาป้อนรหัสผ่าน',
            ]

        ); {
            $user = User::find($id);
            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('/admin/user/index');
    }

    public function deleteuser($id)
    {
        $delete = User::find($id);

        $delete->delete();
        return redirect('/admin/user/index');
    }
}
