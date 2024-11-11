@extends('layout')
@section('title', 'Login')

@section('content')
    <style>
        /* Background styling */
        body {
            background: url('https://images.unsplash.com/photo-1583364486567-ce2e045676e9?q=80&w=1934&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center center fixed;
            background-size: cover;
        }

        /* Container styling */
        .form-container {
            background: rgba(255, 255, 255, 0.9); /* White with transparency */
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            margin: 5% auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        /* Input and button styling */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        /* Alert styling */
        .alert {
            margin-top: 15px;
        }
    </style>

    <div class="container form-container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
@endsection
