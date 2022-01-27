@extends('layouts.admin.admin')
@section('Conten')

<div class="container">
  <div class="row mt-4">
    <h3>User</h3>
    <br>


  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user as $users )
    <tr>

      <td>{{$users->id}}</td>
      <td>{{$users->username}}</td>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->address}}</td>
      <td>{{$users->phone}}</td>

      <td>
        <a href="{{url ('/admin/user/edituser/'.$users->id)}}" class="btn btn-success">Edit</a>
        <a href="{{url ('/admin/user/deleteuser/'.$users->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach




  </tbody>
</table>
  </div>
</div>
@endsection
