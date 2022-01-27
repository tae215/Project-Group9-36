@extends('layouts.admin.admin')
@section('Conten')



<h2>Create New Header</h2>
  <form action ="" method="post" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">Header</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Header">
</div>
<div class="form-group">
    <label for="status">Text</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="Text">
</div>
<div class="form-group">
    <label for="id_user">Status</label>
    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Status">
</div>
<div class="form-group">
    <label for="id_types">User</label>
    <input type="text" class="form-control" id="id_types" name="id_types" placeholder="User">
</div>
<div class="form-group">
    <label for="image">Image Menu</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Chiise file </label>
</div>
</div>
    <button type="sunmit" name="submit" class="btn btn-success">Submit</button>
</form>

<div class="container">
  <div class="row mt-4">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    
  </tbody>
</table>
  </div>
</div>
@endsection