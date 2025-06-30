@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <h1 class="card-title">Tentang Direktori Pendidikan Kota Palopo</h1>
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <p class="lead">Direktori Pendidikan Kota Palopo adalah platform informasi terpadu yang menyediakan data lengkap mengenai institusi pendidikan di Kota Palopo.</p>

                    <h3>Tujuan Kami</h3>
                    <p>Kami bertujuan untuk menyediakan informasi yang akurat dan terpercaya mengenai institusi pendidikan di Kota Palopo untuk membantu masyarakat dalam mencari dan memilih institusi pendidikan yang sesuai dengan kebutuhan mereka.</p>

                    <h3>Visi</h3>
                    <p>Menjadi sumber informasi pendidikan terlengkap dan terpercaya untuk Kota Palopo.</p>

                    <h3>Misi</h3>
                    <ul>
                        <li>Menyediakan informasi yang akurat dan terpercaya mengenai institusi pendidikan di Kota Palopo</li>
                        <li>Membantu masyarakat dalam memilih institusi pendidikan yang sesuai dengan kebutuhan mereka</li>
                        <li>Mendukung perkembangan pendidikan di Kota Palopo melalui penyediaan informasi yang komprehensif</li>
                        <li>Menjembatani komunikasi antara masyarakat dan institusi pendidikan</li>
                    </ul>

                    <h3>Sejarah Kota Palopo</h3>
                    <p>Kota Palopo adalah salah satu kota di provinsi Sulawesi Selatan, Indonesia. Kota ini pernah menjadi ibu kota Kerajaan Luwu yang merupakan kerajaan tertua di Sulawesi Selatan. Kota Palopo secara resmi dimekarkan dari Kabupaten Luwu pada tahun 2002.</p>

                    <p>Sebagai kota yang terus berkembang, Palopo memiliki beragam institusi pendidikan mulai dari tingkat Taman Kanak-kanak hingga Perguruan Tinggi yang tersebar di berbagai wilayah kota.</p>

                    <h3>Pendidikan di Kota Palopo</h3>
                    <p>Kota Palopo memiliki institusi pendidikan yang lengkap di semua jenjang, meliputi:</p>
                    <ul>
                        <li>Taman Kanak-kanak (TK)</li>
                        <li>Sekolah Dasar (SD)</li>
                        <li>Sekolah Menengah Pertama (SMP)</li>
                        <li>Sekolah Menengah Atas (SMA)</li>
                        <li>Sekolah Menengah Kejuruan (SMK)</li>
                        <li>Perguruan Tinggi</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4>Kontak Kami</h4>
                            <p>Jika Anda memiliki pertanyaan, saran, atau ingin berkolaborasi dengan kami, silakan hubungi kami melalui:</p>
                            <address>
                                <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Jenderal Sudirman No. 1, Palopo, Sulawesi Selatan</p>
                                <p><i class="fas fa-phone me-2"></i> (0471) 123456</p>
                                <p><i class="fas fa-envelope me-2"></i> info@palopoedu.id</p>
                            </address>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <h4>Statistik Pendidikan</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Taman Kanak-kanak
                                    <span class="badge bg-primary rounded-pill badge-tk">25</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sekolah Dasar
                                    <span class="badge bg-primary rounded-pill badge-sd">45</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sekolah Menengah Pertama
                                    <span class="badge bg-primary rounded-pill badge-smp">20</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sekolah Menengah Atas
                                    <span class="badge bg-primary rounded-pill badge-sma">15</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Sekolah Menengah Kejuruan
                                    <span class="badge bg-primary rounded-pill badge-smk">10</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Perguruan Tinggi
                                    <span class="badge bg-primary rounded-pill badge-univ">5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
