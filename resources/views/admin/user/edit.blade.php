@extends('layouts.admin.admin')
@section('Conten')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<h2>Edit User</h2>
  <form action ="{{url('/admin/user/updateuser/'.$edituser->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="username">User</label>
    <input type="text" class="form-control" id="username" name="username" value="{{$edituser->username}}">
    <div class="row mt-3">
      @error('username')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$edituser->name}}">
    <div class="row mt-3">
      @error('name')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{$edituser->email}}">
    <div class="row mt-3">
      @error('email')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{$edituser->address}}">
    <div class="row mt-3">
      @error('address')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{$edituser->phone}}">
    <div class="row mt-3">
      @error('phone')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="password">เปลี่ยนรหัสผ่าน</label>
    <input type="text" class="form-control" id="password" name="password" value="{{$edituser->password}}">
    <div class="row mt-3">
      @error('password')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>

    <button type="sunmit" name="submit" class="btn btn-success">Update</button>
</form>

@endsection
