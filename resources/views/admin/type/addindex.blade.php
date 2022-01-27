@extends('layouts.admin.admin')
@section('Conten')

<div class="container">
  <div class="row mt-4">
    <h3>Type</h3>
    <br>
    <a href="{{route('type')}}" class="btn btn-sm btn-primary">เพิ่มข้อมูล</a>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Types</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($type as $types )
    <tr>

      <td>{{$types->id_types}}</td>
      <td>{{$types->text}}</td>
      <td>
        <img src="{{asset('admin/images/'.$types->image)}}" alt="" style="width:500px">

      </td>
      <td>
        <a href="{{url ('/admin/type/edittype/'.$types->id_types)}}" class="btn btn-success">Edit</a>
        <a href="{{url ('/admin/type/deletetype/'.$types->id_types)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach




  </tbody>
</table>
  </div>
</div>
@endsection
