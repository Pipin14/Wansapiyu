@extends('frontend.app')

@section('content')
<div class="container">
    <h1 class="d-flex justify-content-center text-center mt-4 mb-4"> Galeri - {{ $portofolio->judul }}</h1>
    <div class="row">
        @foreach($galeris as $galeri)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $galeri->galeri_portofolio) }}" class="card-img-top" alt="Gallery Image">
            </div>
        </div>
        @endforeach
    </div>
    <div class="mb-4 text-center">
        <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
            <a href="{{ route('portofolio') }}" class="btn btn-outline-secondary btn-sm d-flex align-items-center">
                <i class="bi bi-arrow-left-circle me-2"></i> Kembali ke Portofolio
            </a>
        </div>
    </div>
</div>
@endsection