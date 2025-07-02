<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Direktori Pendidikan Kota Palopo')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <i class="fas fa-school me-2"></i>
                    <span>Direktori Pendidikan</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                Institusi Pendidikan
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="levelsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tingkat Pendidikan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="levelsDropdown">
                                @isset($educationLevels)
                                    @foreach($educationLevels as $level)
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/?level=' . $level->id) }}">
                                                {{ $level->name }} ({{ $level->code }})
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <li><span class="dropdown-item text-muted">Tidak tersedia</span></li>
                                @endisset
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
                                Tentang
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">
                                Kontak
                            </a>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center">
                        @auth
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button class="btn btn-outline-light" type="submit">
                                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                                </button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                                <i class="fas fa-sign-in-alt me-1"></i> Login
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-light">
                                <i class="fas fa-user-plus me-1"></i> Daftar
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="custom-footer mt-4">
        <div class="container py-4">
            <div class="row gy-4">
                <div class="col-md-4">
                    <h5>Direktori Pendidikan Kota Palopo</h5>
                    <p>Platform informasi lengkap mengenai institusi pendidikan di Kota Palopo, mulai dari TK hingga Perguruan Tinggi.</p>
                </div>
                <div class="col-md-4">
                    <h5>Tautan Penting</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="{{ route('home') }}">Institusi Pendidikan</a></li>
                        <li><a href="{{ url('/about') }}">Tentang</a></li>
                        <li><a href="{{ url('/contact') }}">Kontak</a></li>
                        <li><a href="{{ url('/admin') }}">Admin Panel</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <address>
                        <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Jenderal Sudirman No. 1, Palopo, Sulawesi Selatan</p>
                        <p><i class="fas fa-phone me-2"></i> (0471) 123456</p>
                        <p><i class="fas fa-envelope me-2"></i> info@palopoedu.id</p>
                    </address>
                </div>
            </div>
            <hr>
            <div class="text-center small">
                <p class="mb-0">&copy; {{ date('Y') }} Direktori Pendidikan Kota Palopo. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
