@extends('layout')
@section('title', 'Registration')

@section('content')
    <style>
        /* Background styling */
        body {
            background: url('https://images.unsplash.com/photo-1583364486567-ce2e045676e9?q=80&w=1934&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        /* Semi-transparent overlay for the form */
        .overlay {
            background: rgba(0, 0, 0, 0.6); /* Dark overlay for readability */
            padding: 40px;
            border-radius: 8px;
        }

        .form-control, .btn {
            border-radius: 5px;
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-5 overlay">
            <h3 class="text-center mb-4">Create an Account</h3>

            {{-- Display Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Display Session Messages --}}
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Registration Form --}}
            <form action="{{ route('registration.post') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
@endsection
