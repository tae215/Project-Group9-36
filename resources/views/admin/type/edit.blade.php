@extends('layouts.admin.admin')
@section('Conten')




<h2>Edit type</h2>
  <form action ="{{url('/admin/type/updatetype/'.$edittype->id_types)}}" method="POST" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">Type</label>
    <input type="text" class="form-control" id="text" name="text" value="{{$edittype->text}}">
    <div class="row mt-3">

    </div>




    <button type="sunmit" name="submit" class="btn btn-success">Update</button>
</form>



@endsection
