@extends('layout')
@section('title', 'Registration')

@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $errors)
                    <div class="alert alert-danger">{{$errors}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('errors')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
    <form action="{{ route('registration.post') }}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
        @csrf
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password"> 
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection