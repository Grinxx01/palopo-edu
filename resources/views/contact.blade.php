@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<style>
    .contact-hero {
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
        color: #fff;
        padding: 3rem 1rem;
        border-radius: .75rem;
        text-align: center;
        margin-bottom: 2rem;
    }
    .card-custom {
        border-left: 4px solid #0d6efd;
        border-radius: .5rem;
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-custom:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    .btn-send {
        font-weight: 600;
        padding: .75rem 1.5rem;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    .btn-send:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13,110,253,0.4);
    }
</style>

<div class="container">
    <!-- Hero Section -->
    <div class="contact-hero">
        <h1 class="fw-bold mb-2">
            <i class="fas fa-envelope-open-text me-2"></i> Hubungi Kami
        </h1>
        <p class="lead mb-0">Kami siap membantu Anda. Silakan kirim pertanyaan atau masukan melalui formulir di bawah ini.</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card card-custom h-100 p-4">
                <h4 class="mb-3"><i class="fas fa-map-marker-alt text-primary me-2"></i> Alamat</h4>
                <p class="mb-4">
                    Jl. Jenderal Sudirman No. 1<br>Kota Palopo, Sulawesi Selatan
                </p>
                <h4 class="mb-3"><i class="fas fa-phone text-primary me-2"></i> Telepon</h4>
                <p class="mb-4">(0471) 123456</p>
                <h4 class="mb-3"><i class="fas fa-envelope text-primary me-2"></i> Email</h4>
                <p>info@palopoedu.id</p>
                <div class="ratio ratio-4x3 mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127672.75772082225!2d120.11695580339491!3d-2.994752067685444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d91a0900cb7bc2d%3A0x88e32a710bc823ee!2sPalopo%20City%2C%20South%20Sulawesi!5e0!3m2!1sen!2sid!4v1686572811150!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card card-custom p-4">
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

                <h3 class="mb-4"><i class="fas fa-paper-plane me-2 text-primary"></i> Kirim Pesan</h3>
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
                        <button type="submit" class="btn btn-primary btn-send">
                            <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
