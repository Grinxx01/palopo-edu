@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
        <div class="text-center mb-4">
            <i class="fas fa-sign-in-alt fa-3x text-primary"></i>
            <h3 class="mt-2">Login Akun</h3>
            <p class="text-muted">Silakan masuk untuk melanjutkan</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="you@example.com">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" required placeholder="********">
                </div>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-1"></i> Login
                </button>
            </div>
            <div class="text-center">
                <small class="text-muted">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Daftar</a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection
