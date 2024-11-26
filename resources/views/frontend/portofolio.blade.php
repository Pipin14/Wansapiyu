    @extends('frontend.app')

    @section('title', 'Portofolio')

    @section('content')

    <section class="py-5 bg-light">
        <div class="container">
            <h1 class="display-4 text-center mb-4" data-aos="fade-up">Portofolio Kami</h1>
            <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="300">Lihat karya terbaik kami yang menangkap momen spesial dengan sempurna.</p>
            <div class="text-center mb-5" data-aos="zoom-in">
                <h2 class="h3 mb-4" style="font-size: 2.5rem;">Kategori</h2>
                <div class="row">
                    @foreach($portofolios as $portofolio)
                    <div class="col-md-4 mb-4">
                        <div class="card border-light shadow-sm">
                            <img src="{{ asset('storage/' . $portofolio->gambar_portofolio) }}" class="card-img-top" alt="Gambar Portofolio">
                            <div class="card-body text-start">
                                <h5 class="card-title">{{ $portofolio->judul }}</h5>
                                <p class="card-text">{{nl2br($portofolio->deskripsi)}}</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Galeri Kami Section -->
            <div class="text-center mb-5" data-aos="zoom-in">
                <h2 class="h3 mb-4" style="font-size: 2.5rem;">Galeri Kami</h2>
                <div class="row">
                    <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-delay="800">
                        <img src="{{ asset('images/portofolio/photo1.jpg') }}" class="img-fluid rounded shadow" alt="Wedding Photo" style="transition: transform 0.3s ease-in-out;">
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                        <img src="{{ asset('images/portofolio/photo2.jpg') }}" class="img-fluid rounded shadow" alt="Corporate Event" style="transition: transform 0.3s ease-in-out;">
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
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
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="statistic-box shadow-lg p-4 bg-white rounded">
                        <h3 class="display-4 statistic-counter" data-count="200+" data-type="plus">0</h3>
                        <p class="lead">Proyek Selesai</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="statistic-box shadow-lg p-4 bg-white rounded">
                        <h3 class="display-4 statistic-counter" data-count="92" data-type="percent">0</h3>
                        <p class="lead">Klien Puas</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1100">
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