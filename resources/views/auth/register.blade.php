@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:80vh;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 450px;">
        <div class="text-center mb-4">
            <i class="fas fa-user-plus fa-3x text-primary"></i>
            <h3 class="mt-2">Daftar Akun Baru</h3>
            <p class="text-muted">Isi form di bawah untuk membuat akun</p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text text-primary">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required placeholder="Nama Lengkap">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text text-primary">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="you@example.com">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text text-primary">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" required placeholder="********">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                    <span class="input-group-text text-primary">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password_confirmation" class="form-control" required placeholder="********">
                </div>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-plus me-1"></i> Daftar
                </button>
            </div>

            <div class="text-center">
                <small class="text-muted">
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Masuk di sini</a>
                </small>
            </div>
        </form>
    </div>
</div>
@endsection
