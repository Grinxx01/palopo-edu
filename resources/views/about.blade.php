@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<style>
    .page-header {
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
    .statistic-badge {
        font-size: 0.9rem;
        font-weight: 600;
        padding: .4em .75em;
    }
    .badge-tk { background: #FF6B6B; }
    .badge-sd { background: #4ECDC4; }
    .badge-smp { background: #FFD166; }
    .badge-sma { background: #06D6A0; }
    .badge-smk { background: #118AB2; }
    .badge-univ { background: #073B4C; }
</style>

<div class="container">
    <!-- Hero Section -->
    <div class="page-header">
        <h1 class="fw-bold mb-2">
            <i class="fas fa-info-circle me-2"></i> Tentang Direktori Pendidikan Kota Palopo
        </h1>
        <p class="lead mb-0">
            Informasi lengkap dan terpercaya mengenai pendidikan di Kota Palopo.
        </p>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card card-custom mb-4 p-4">
                <p class="lead">
                    Direktori Pendidikan Kota Palopo adalah platform informasi terpadu yang menyediakan data lengkap mengenai institusi pendidikan di Kota Palopo.
                </p>

                <h3 class="mt-4">🎯 Tujuan Kami</h3>
                <p>
                    Kami bertujuan untuk menyediakan informasi yang akurat dan terpercaya mengenai institusi pendidikan untuk membantu masyarakat dalam mencari dan memilih sekolah atau kampus yang sesuai.
                </p>

                <h3 class="mt-4">👁️ Visi</h3>
                <p>
                    Menjadi sumber informasi pendidikan terlengkap dan terpercaya untuk Kota Palopo.
                </p>

                <h3 class="mt-4">🚀 Misi</h3>
                <ul class="list-unstyled ps-3">
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Menyediakan informasi yang akurat dan terpercaya mengenai institusi pendidikan</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Membantu masyarakat dalam memilih institusi pendidikan</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Mendukung perkembangan pendidikan di Kota Palopo</li>
                    <li><i class="fas fa-check-circle text-primary me-2"></i> Menjembatani komunikasi antara masyarakat dan institusi pendidikan</li>
                </ul>

                <h3 class="mt-4">🏛️ Sejarah Kota Palopo</h3>
                <p>
                    Kota Palopo adalah salah satu kota di Sulawesi Selatan, Indonesia. Dahulu menjadi ibu kota Kerajaan Luwu, kota ini resmi dimekarkan dari Kabupaten Luwu pada tahun 2002. Sebagai kota yang berkembang, Palopo memiliki beragam institusi pendidikan dari TK hingga Perguruan Tinggi.
                </p>

                <h3 class="mt-4">📚 Pendidikan di Kota Palopo</h3>
                <p>
                    Kota Palopo memiliki institusi pendidikan yang lengkap di semua jenjang, meliputi:
                </p>
                <ul class="list-unstyled ps-3">
                    <li><i class="fas fa-circle text-primary me-2"></i> Taman Kanak-kanak (TK)</li>
                    <li><i class="fas fa-circle text-primary me-2"></i> Sekolah Dasar (SD)</li>
                    <li><i class="fas fa-circle text-primary me-2"></i> Sekolah Menengah Pertama (SMP)</li>
                    <li><i class="fas fa-circle text-primary me-2"></i> Sekolah Menengah Atas (SMA)</li>
                    <li><i class="fas fa-circle text-primary me-2"></i> Sekolah Menengah Kejuruan (SMK)</li>
                    <li><i class="fas fa-circle text-primary me-2"></i> Perguruan Tinggi</li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Kontak Card -->
            <div class="card card-custom mb-4 p-4 bg-light">
                <h4 class="mb-3">📞 Kontak Kami</h4>
                <p>
                    Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami:
                </p>
                <address>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Jenderal Sudirman No. 1, Palopo</p>
                    <p><i class="fas fa-phone me-2"></i> (0471) 123456</p>
                    <p><i class="fas fa-envelope me-2"></i> info@palopoedu.id</p>
                </address>
            </div>

            <!-- Statistik Card -->
            <div class="card card-custom p-4">
                <h4 class="mb-3">📊 Statistik Pendidikan</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Taman Kanak-kanak
                        <span class="badge rounded-pill statistic-badge badge-tk">94</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sekolah Dasar
                        <span class="badge rounded-pill statistic-badge badge-sd">80</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sekolah Menengah Pertama
                        <span class="badge rounded-pill statistic-badge badge-smp">25</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sekolah Menengah Atas
                        <span class="badge rounded-pill statistic-badge badge-sma">13</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sekolah Menengah Kejuruan
                        <span class="badge rounded-pill statistic-badge badge-smk">20</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Perguruan Tinggi
                        <span class="badge rounded-pill statistic-badge badge-univ">20</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
