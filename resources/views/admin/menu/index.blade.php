@extends('layouts.admin.admin')
@section('Conten')



<h2>Create New menu</h2>
  <form action ="{{route('create')}}" method="post" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">Menu</label>
    <input type="text" class="form-control" id="text" name="text" placeholder="Menu name">
    <div class="row mt-3">
      @error('text')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="status">
    <div class="row mt-3">
      @error('status')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>

<div class="form-group">
    <label for="id_types">types</label>
    <select name="id_types" class="form-control" id="">
        @foreach($types as $type)
        <option value="{{ $type->id_types }}">{{ $type->text }}</option>
        @endforeach
    </select>
    <div class="row mt-3">
      @error('id_types')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="image">Image Menu</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Chiise file </label>
    <div class="row mt-3">
      @error('image')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
</div>
    <button type="sunmit" name="submit" class="btn btn-success">Submit</button>
</form>


@endsection
