@extends('frontend.app')

@section('title', $layanan->nama)

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('storage/'.$layanan->gambar) }}" class="img-fluid rounded shadow-lg" alt="{{ $layanan->nama }}" style="object-fit: cover; height: 100%; width: 100%; object-position: top;">
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="display-4 mb-4 text-dark">{{ $layanan->nama }}</h2>
                <p class="card-text mb-4">{!! nl2br(e($layanan->deskripsi)) !!}</p>
                <p class="mb-4"><strong>Harga: <span class="text-primary">Rp {{ number_format($layanan->harga_paket, 0, ',', '.') }} </strong></span></p>

                <div class="d-flex justify-content-start align-items-center gap-3 mt-4">
                    <a href="{{ route('layanan') }}" class="btn btn-outline-secondary btn-sm">
                        <i class="bi bi-arrow-left-circle me-2"></i> Kembali ke Layanan
                    </a>
                    <a href="{{ route('contact.us') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-chat-dots me-2"></i> Hubungi Kami
                    </a>
                </div>
                <div class="mt-4 text-center">
                    <p class="text-muted mb-3">Bagikan layanan ini dengan teman-teman Anda:</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-twitter"></i> Twitter
                        </a>
                        <a href="#" class="btn btn-outline-success btn-sm">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection