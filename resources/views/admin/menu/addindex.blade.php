@extends('layouts.admin.admin')
@section('Conten')

<div class="container">
  <div class="row mt-4">
    <h3>Menu</h3>
    <br>
    <a href="{{route('menu')}}" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Menu</th>
      <th scope="col">Status</th>
      <th scope="col">Types</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($menu as $menus )
    <tr>

      <td>{{$menus->id_menu}}</td>
      <td>{{$menus->text}}</td>
      <td>{{$menus->status}}</td>
      <td>{{$menus->id_types}}</td>
      <td>
        <img src="{{asset('admin/images/'.$menus->image)}}" alt="" style="width:500px">

      </td>
      <td>
        <a href="{{url ('/admin/menu/edit/'.$menus->id_menu)}}" class="btn btn-success">Edit</a>
        <a href="{{url ('/admin/menu/delete/'.$menus->id_menu)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>
  </div>
</div>
@endsection
