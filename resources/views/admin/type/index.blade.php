@extends('layouts.admin.admin')
@section('Conten')



<h2>Create New Type</h2>
  <form action ="{{route('createtype')}}" method="post" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">Type</label>
    <input type="text" class="form-control" id="text" name="text" placeholder="Type">
</div>

    <button type="sunmit" name="submit" class="btn btn-success">Submit</button>
</form>


@endsection
