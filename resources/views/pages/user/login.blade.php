@extends('layouts.guest2.app')

@section('title', 'Login User')

@section('content')
<div class="container mt-5">
    <div class="login-container mx-auto">
        <h2><i class="bi bi-box-arrow-in-right"></i> Login</h2>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">
                    <i class="bi bi-envelope-fill text-success"></i> Email
                </label>
                <input type="email" name="email" id="email"
                       class="form-control" placeholder="Masukkan email"
                       value="{{ old('email') }}" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">
                    <i class="bi bi-lock-fill text-success"></i> Password
                </label>
                <input type="password" name="password" id="password"
                       class="form-control" placeholder="Masukkan password" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-success w-100">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        background: linear-gradient(to bottom right, #e8f5e9, #c8e6c9);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        height: 100vh;
    }

    .login-container {
        max-width: 400px;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
        color: #2e7d32;
        text-align: center;
        margin-bottom: 20px;
        font-weight: bold;
    }

    label {
        color: #388e3c;
        font-weight: 600;
    }

    input.form-control {
        border: 1px solid #a5d6a7;
        transition: 0.3s;
    }

    input.form-control:focus {
        border-color: #2e7d32;
        box-shadow: 0 0 6px #a5d6a7;
    }

    .btn-success {
        background-color: #2e7d32;
        border-color: #2e7d32;
    }

    .btn-success:hover {
        background-color: #1b5e20;
    }

    .alert {
        margin-top: 10px;
    }
</style>
@endpush
