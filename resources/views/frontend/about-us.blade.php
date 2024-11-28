@extends('frontend.app')

@section('title', 'About Us')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h1 class="display-4 text-center mb-4" data-aos="fade-up">Tentang Kami</h1>
        <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="200">
            Kami adalah penyedia jasa fotografi profesional yang berdedikasi untuk menangkap momen terbaik Anda dengan penuh kreativitas dan kualitas tinggi.
        </p>

        @foreach ($aboutUsSections as $section)
        <div class="row align-items-center mb-5">
            @if ($loop->index % 2 == 0)
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="h3 mb-3">{{ $section->section }}</h2>
                <p>{!! nl2br(e($section->konten)) !!}</p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('storage/' . $section->gambar) }}" class="img-fluid rounded shadow" alt="{{ $section->section }}">
            </div>
            @else
            <div class="col-md-6 order-md-2" data-aos="fade-left">
                <h2 class="h3 mb-3">{{ $section->section }}</h2>
                <p>{!! nl2br(e($section->konten)) !!}</p>
            </div>
            <div class="col-md-6 order-md-1" data-aos="fade-right">
                <img src="{{ asset('storage/' . $section->gambar) }}" class="img-fluid rounded shadow" alt="{{ $section->section }}">
            </div>
            @endif
        </div>
        @endforeach
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h3 mb-4">Tim Kami</h2>
            <p class="lead text-muted mb-5">Kami didukung oleh tim fotografer profesional yang berdedikasi tinggi, siap menangkap setiap momen berharga Anda dengan kualitas terbaik.</p>
        </div>
        <div class="row justify-content-center">
            @foreach ($anggotas as $anggota)
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <div class="card shadow-sm border-light rounded">
                    <img src="{{ $anggota->photo ? asset('storage/' . $anggota->photo) : asset('images/default-user.png') }}"
                        class="card-img-top rounded-circle mx-auto mt-4"
                        alt="{{ $anggota->nama_anggota }}"
                        width="150">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">{{ $anggota->nama_anggota }}</h5>
                        <p class="text-muted mb-3">{{ $anggota->role }}</p>
                        <div class="social-icons mt-3">
                            @if($anggota->linkedin)
                            <a href="{{ $anggota->linkedin }}" class="text-dark mx-2"><i class="fab fa-linkedin"></i></a>
                            @endif
                            @if($anggota->twitter)
                            <a href="{{ $anggota->twitter }}" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if($anggota->instagram)
                            <a href="{{ $anggota->instagram }}" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection