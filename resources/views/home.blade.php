@extends('layouts.app')

@section('title', 'Direktori Pendidikan')

@section('content')
<div class="home-banner">
    <div class="container">
        <h1>Direktori Pendidikan Kota Palopo</h1>
        <p class="lead mb-4">Temukan informasi lengkap tentang institusi pendidikan di Kota Palopo</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" id="searchInstitution" class="form-control form-control-lg" placeholder="Cari institusi pendidikan...">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filter -->
<div class="filter-section">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h4 class="mb-3 mb-md-0">
                @if($currentLevel)
                    Menampilkan: {{ $currentLevel->name }} ({{ $currentLevel->code }})
                    <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary ms-2">
                        <i class="fas fa-times"></i> Hapus Filter
                    </a>
                @else
                    Semua Institusi Pendidikan
                @endif
            </h4>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-md-end">
                <div class="btn-group" role="group">
                    <a href="{{ route('home') }}" class="btn {{ !$levelId ? 'btn-primary' : 'btn-outline-primary' }}">Semua</a>
                    @foreach($educationLevels as $level)
                        <a href="{{ route('home', ['level' => $level->id]) }}" class="btn {{ $levelId == $level->id ? 'btn-primary' : 'btn-outline-primary' }}">
                            {{ $level->code }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- List Institusi -->
<div class="row" id="institutionsList">
    @forelse($institutions as $institution)
        <div class="col-md-6 col-lg-4 institution-card">
            <div class="card h-100">
                <div class="position-relative">
                    @if($institution->gambar)
                        <img src="{{ asset('storage/' . $institution->gambar) }}" class="card-img-top" alt="{{ $institution->nama_sekolah }}">
                    @else
                        <img src="{{ asset('assets/img/no-image.jpg') }}" class="card-img-top" alt="No Image Available">
                    @endif
                    <span class="badge bg-primary institution-type-badge badge-{{ strtolower($institution->tingkat_pendidikan) }}">
                        {{ $institution->tingkat_pendidikan }}
                    </span>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $institution->nama_sekolah }}</h5>
                    <p class="card-text">
                        <i class="fas fa-map-marker-alt text-secondary me-1"></i>
                        {{ $institution->alamat }}
                    </p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('institusi.show', $institution->id) }}" class="btn btn-primary">
                            <i class="fas fa-info-circle me-1"></i> Detail
                        </a>
                        @if($institution->url_website)
                            <a href="{{ $institution->url_website }}" class="btn btn-outline-secondary" target="_blank">
                                <i class="fas fa-external-link-alt me-1"></i> Website
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info">
                <i class="fas fa-info-circle me-2"></i>
                Tidak ada institusi pendidikan yang ditemukan.
            </div>
        </div>
    @endforelse

    <div id="noResults" class="col-12" style="display:none;">
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-circle me-2"></i>
            Tidak ada institusi pendidikan yang sesuai dengan pencarian Anda.
        </div>
    </div>
</div>
@endsection
