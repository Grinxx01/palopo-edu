@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $institution->nama_sekolah }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $institution->nama_sekolah }}</h1>
            <span class="badge bg-primary mb-3">
                {{ $institution->tingkat_pendidikan }}
            </span>

            @if($institution->gambar)
                <img src="{{ asset('storage/'.$institution->gambar) }}" class="img-fluid mb-3" alt="{{ $institution->nama_sekolah }}">
            @else
                <img src="{{ asset('assets/img/no-image.jpg') }}" class="img-fluid mb-3" alt="No Image">
            @endif

            @if($institution->deskripsi)
                <h3>Deskripsi</h3>
                <p>{{ $institution->deskripsi }}</p>
            @endif
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-info-circle me-2"></i> Informasi</h5>
                </div>
                <div class="card-body">
                    <p><strong>Alamat:</strong><br>
                    {{ $institution->alamat }}</p>

                    @if($institution->url_website)
                    <p><strong>Website:</strong><br>
                    <a href="{{ $institution->url_website }}" target="_blank">{{ $institution->url_website }}</a></p>
                    @endif

                    @if($institution->url_website)
                    <div class="d-grid">
                        <a href="{{ $institution->url_website }}" class="btn btn-primary" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i> Kunjungi Website
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
