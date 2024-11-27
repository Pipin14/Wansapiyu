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
                                <a href="{{ route('portofolio.kategori', $portofolio->judul) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="h3 mb-4 text-center" style="font-size: 2.5rem;" data-aos="fade-up" data-aos-delay="500">Sertifikasi dan Penghargaan Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="award-box shadow-lg p-4 bg-white rounded">
                        <img src="{{ asset('images/awards/award1.jpg') }}" alt="Award 1" class="img-fluid mb-3">
                        <h5 class="h4">Penghargaan Inovasi 2023</h5>
                        <p class="lead">Diberikan untuk inovasi terbaik dalam desain produk.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="award-box shadow-lg p-4 bg-white rounded">
                        <img src="{{ asset('images/awards/award2.jpg') }}" alt="Award 2" class="img-fluid mb-3">
                        <h5 class="h4">Sertifikat ISO 9001</h5>
                        <p class="lead">Sertifikasi untuk standar kualitas manajemen terbaik.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="1100">
                    <div class="award-box shadow-lg p-4 bg-white rounded">
                        <img src="{{ asset('images/awards/award3.jpg') }}" alt="Award 3" class="img-fluid mb-3">
                        <h5 class="h4">Top Business Award 2023</h5>
                        <p class="lead">Penghargaan untuk pertumbuhan bisnis yang luar biasa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #f8f9fa; background: transparent;">
        <div class="container">
            <h2 class="h3 mb-4 text-center" style="font-size: 2.5rem;" data-aos="fade-in" data-aos-delay="500">Klien Kami</h2>
            <div class="row">
                <div class="col-12">
                    <div class="marquee-container">
                        <div class="marquee">
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/BINUS.png') }}" alt="Client 1" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/UNJ.png') }}" alt="Client 2" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/UINSYAHID.png') }}" alt="Client 3" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/IPB.png') }}" alt="Client 4" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/UNPAM.png') }}" alt="Client 5" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/BAKRIE.png') }}" alt="Client 6" class="img-fluid">
                            </div>

                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/BINUS.png') }}" alt="Client 1" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/UNJ.png') }}" alt="Client 2" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/UINSYAHID.png') }}" alt="Client 3" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/IPB.png') }}" alt="Client 4" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/UNPAM.png') }}" alt="Client 5" class="img-fluid">
                            </div>
                            <div class="marquee-item">
                                <img src="{{ asset('images/clients/BAKRIE.png') }}" alt="Client 6" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

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