@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<style>
    .hero-section {
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
        color: #fff;
        border-radius: .75rem;
        padding: 4rem 1rem;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    .hero-section .icon {
        font-size: 3.5rem;
        opacity: 0.2;
        position: absolute;
        right: 20px;
        bottom: 20px;
    }
    .info-card {
        border-left: 4px solid #0d6efd;
        border-radius: .5rem;
        background: #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .info-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    .btn-cta {
        font-weight: 600;
        padding: .75rem 2rem;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    .btn-cta:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13,110,253,0.4);
    }
</style>

<div class="container my-5">
    <!-- Hero -->
    <section class="hero-section mb-5">
        <i class="fas fa-graduation-cap icon"></i>
        <h1 class="fw-bold mb-3">Selamat Datang di Direktori Pendidikan Kota Palopo</h1>
        <p class="lead mb-4">Temukan informasi lengkap tentang pendidikan dan perundang-undangannya di Indonesia.</p>
        <a href="{{ route('login') }}" class="btn btn-light btn-cta">
            <i class="fas fa-sign-in-alt me-2"></i> Login / Daftar untuk Melihat Direktori
        </a>
    </section>

    <!-- Apa itu Pendidikan -->
    <section class="mb-4">
        <div class="info-card p-4">
            <h2 class="h4 fw-bold mb-3">
                <i class="fas fa-book-open text-primary me-2"></i> Apa itu Pendidikan?
            </h2>
            <p class="text-secondary mb-0">
                Pendidikan adalah usaha sadar dan terencana untuk mewujudkan suasana belajar dan proses pembelajaran agar peserta didik secara aktif mengembangkan potensi dirinya. Pendidikan tidak hanya terbatas pada lingkungan sekolah, melainkan mencakup seluruh aspek kehidupan yang mendidik.
            </p>
        </div>
    </section>

    <!-- Undang-Undang Pendidikan -->
    <section class="mb-5">
        <div class="info-card p-4">
            <h2 class="h4 fw-bold mb-3">
                <i class="fas fa-scale-balanced text-primary me-2"></i> Undang-Undang Tentang Pendidikan
            </h2>
            <p>
                Di Indonesia, pendidikan diatur dalam <strong>Undang-Undang Nomor 20 Tahun 2003</strong> tentang Sistem Pendidikan Nasional. UU ini mengatur hak dan kewajiban warga negara dalam memperoleh pendidikan yang layak, jenjang pendidikan formal, serta peran pemerintah dalam penyelenggaraan pendidikan.
            </p>
            <blockquote class="blockquote mb-0 ps-3 border-start border-primary">
                <p class="mb-1"><em>Pasal 3:</em></p>
                <footer class="blockquote-footer text-muted">
                    Pendidikan nasional berfungsi mengembangkan kemampuan dan membentuk watak serta peradaban bangsa yang bermartabat dalam rangka mencerdaskan kehidupan bangsa.
                </footer>
            </blockquote>
        </div>
    </section>

    <div class="text-center">
        <a href="{{ route('login') }}" class="btn btn-primary btn-cta">
            <i class="fas fa-sign-in-alt me-2"></i> Mulai Sekarang
        </a>
    </div>
</div>
@endsection
