@extends('frontend.app')

@section('title', 'Portofolio')

@section('content')

<section class="py-5 bg-light">
    <div class="container">
        <h1 class="display-4 text-center mb-4" data-aos="fade-up">Portofolio Kami</h1>
        <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="300">Lihat karya terbaik kami yang menangkap momen spesial dengan sempurna.</p>

        <!-- Kategori Portofolio Section -->
        <div class="text-center mb-5" data-aos="zoom-in">
            <h2 class="h3 mb-4" style="font-size: 2.5rem;">Kategori</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800">
                    <div class="card border-light shadow-sm">
                        <img src="{{ asset('images/portofolio/sampel1.jpg') }}" class="card-img-top" alt="Sample 1" style="transition: transform 0.3s ease;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pernikahan Elegan</h5>
                            <p class="card-text">Momen tak terlupakan dari pernikahan istimewa.</p>
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal1">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1300" data-aos-duration="800">
                    <div class="card border-light shadow-sm">
                        <img src="{{ asset('images/portofolio/sampel2.jpg') }}" class="card-img-top" alt="Sample 2" style="transition: transform 0.3s ease;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Foto Produk Premium</h5>
                            <p class="card-text">Karya terbaik untuk branding produk Anda.</p>
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal2">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="800">
                    <div class="card border-light shadow-sm">
                        <img src="{{ asset('images/portofolio/sampel3.jpg') }}" class="card-img-top" alt="Sample 3" style="transition: transform 0.3s ease;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Pesta Keluarga</h5>
                            <p class="card-text">Kenangan manis bersama keluarga tercinta.</p>
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal3">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galeri Kami Section -->
        <div class="text-center mb-5" data-aos="zoom-in">
            <h2 class="h3 mb-4" style="font-size: 2.5rem;">Galeri Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-delay="500">
                    <img src="{{ asset('images/portofolio/photo1.jpg') }}" class="img-fluid rounded shadow" alt="Wedding Photo" style="transition: transform 0.3s ease-in-out;">
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1000">
                    <img src="{{ asset('images/portofolio/photo2.jpg') }}" class="img-fluid rounded shadow" alt="Corporate Event" style="transition: transform 0.3s ease-in-out;">
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="1500">
                    <img src="{{ asset('images/portofolio/photo3.jpg') }}" class="img-fluid rounded shadow" alt="Portrait Session" style="transition: transform 0.3s ease-in-out;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pencapaian Kami Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="h3 mb-4 text-center" data-aos="fade-up" data-aos-delay="500" style="font-size: 2.5rem;">Pencapaian Kami</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1300">
                <div class="statistic-box shadow-lg p-4 bg-white rounded">
                    <h3 class="display-4 statistic-counter" data-count="200+" data-type="plus">0</h3>
                    <p class="lead">Proyek Selesai</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1300">
                <div class="statistic-box shadow-lg p-4 bg-white rounded">
                    <h3 class="display-4 statistic-counter" data-count="92" data-type="percent">0</h3>
                    <p class="lead">Klien Puas</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1300">
                <div class="statistic-box shadow-lg p-4 bg-white rounded">
                    <h3 class="display-4 statistic-counter" data-count="88" data-type="percent">0</h3>
                    <p class="lead">Klien Repeat Order</p>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
@endpush

@endsection