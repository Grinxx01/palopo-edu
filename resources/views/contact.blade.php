@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Hubungi Kami</h1>

                    {{-- Pesan sukses --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Pesan error validasi --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4><i class="fas fa-map-marker-alt me-2 text-primary"></i> Alamat</h4>
                            <p>Jl. Jenderal Sudirman No. 1<br>Kota Palopo<br>Sulawesi Selatan</p>

                            <h4><i class="fas fa-phone me-2 text-primary"></i> Telepon</h4>
                            <p>(0471) 123456</p>

                            <h4><i class="fas fa-envelope me-2 text-primary"></i> Email</h4>
                            <p>info@palopoedu.id</p>
                        </div>
                        <div class="col-md-6">
                            <div class="ratio ratio-4x3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.75772082225!2d120.11695580339491!3d-2.994752067685444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d91a0900cb7bc2d%3A0x88e32a710bc823ee!2sPalopo%20City%2C%20South%20Sulawesi!5e0!3m2!1sen!2sid!4v1686572811150!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h3 class="mb-4">Kirim Pesan</h3>
                    <form action="{{ route('contact') }}" method="post" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
