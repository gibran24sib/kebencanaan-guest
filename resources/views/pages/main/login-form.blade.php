@extends('layouts.guest2.login')

@section('title', 'Login Guest')

@section('content')
    <h3><i class="bi bi-door-open-fill text-danger"></i> Login Akun Guest</h3>

    {{-- Pesan Error --}}
    @if ($errors->any())
        <div class="error-box">
            <ul class="m-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li><i class="bi bi-exclamation-triangle-fill"></i> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Login --}}
    <form action="{{ url('/guest/auth') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label"><i class="bi bi-person-fill"></i> Username</label>
            <input type="text" class="form-control" id="username" name="username"
                placeholder="Masukkan username" value="{{ old('username') }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label"><i class="bi bi-lock-fill"></i> Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-2">
            <i class="bi bi-box-arrow-in-right"></i> Masuk
        </button>
    </form>
@endsection
