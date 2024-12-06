@extends('frontend.app')

@section('content')
<div class="container">
    <h2 class="d-flex justify-content-center text-center mt-4 mb-4"> Galeri - {{ $portofolio->judul }}</h2>
    <div class="row">
        @foreach($galeris as $galeri)
        <div class="col-md-4 mb-4">
            <div class="card">
                <a href="{{ asset('storage/' . $galeri->galeri_portofolio) }}" data-bs-toggle="modal" data-bs-target="#imageModal{{ $loop->index }}" data-bs-title="{{ $galeri->judul }}">
                    <img src="{{ asset('storage/' . $galeri->galeri_portofolio) }}" class="card-img-top" alt="Gallery Image">
                </a>
            </div>
        </div>

        <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $loop->index }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel{{ $loop->index }}">{{ $galeri->judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('storage/' . $galeri->galeri_portofolio) }}" class="img-fluid" alt="Gallery Image">
                    </div>
                </div>
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