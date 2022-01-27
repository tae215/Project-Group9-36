@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3><stong>My Profile</stong></h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Name :</strong> {{Auth::user()->name}}</p>
                  <p><strong>Email :</strong> {{Auth::user()->email}}</p>
                  <p><strong>Address :</strong> {{Auth::user()->address}}</p>
                  <p><strong>Phone :</strong> {{Auth::user()->phone}}</p>


                  <!--ปุ่ม-->
                  <a href= "{{route('index')}}" class="btn btn-primary">Product Management</a>
                  <a href="{{ url('/') }}" class="btn btn-success">Home</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
