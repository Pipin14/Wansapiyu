@extends('frontend.app')

@section('title', 'Layanan Kami')

@section('content')

<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4" style="font-weight: 600;" data-aos="fade-up" data-aos-duration="1000">Layanan Kami</h2>
        <p class="text-center mt-2 mb-5" style="font-size: 1.01rem;" data-aos="fade-up" data-aos-duration="1000">Temukan layanan fotografi yang sesuai dengan kebutuhan Anda.
            Jadikan momen spesial Anda terekam dengan profesionalisme dan kreativitas kami. Temukan penawaran terbaik untuk kebutuhan fotografi Anda.</p>
        <div class="row" data-aos="fade-down" data-aos-duration="1000">
            @foreach ($layanans as $layanan)
            <div class="col-md-4 mb-4">
                <div class="card border-0 rounded-lg card-lamp-effect">
                    <img src="{{ asset('storage/'.$layanan->gambar) }}" class="card-img-top" alt="{{ $layanan->nama }}" loading="lazy">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 600;">{{ $layanan->tipe_paket }}</h5>
                        <p class="card-text">{!! nl2br(e($layanan->deskripsi)) !!}</p>
                        <p class="text-primary"><strong>Harga: Rp {{ number_format($layanan->harga_paket, 0, ',', '.') }} </strong></p>
                        <a href="{{ route('layanan.detail_layanan', ['id' => $layanan->id]) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<section class="bg-primary text-white py-5">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-down" data-aos-duration="1200">Mengapa Memilih Kami?</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <i class="bi bi-people-fill fs-1 mb-3"></i>
                        <h5 class="card-title" style="font-weight: 600;">Pengalaman Profesional</h5>
                        <p class="card-text">Tim fotografer kami memiliki pengalaman bertahun-tahun dalam menangani berbagai jenis pemotretan, dari pernikahan hingga foto produk, dengan pendekatan yang profesional.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <i class="bi bi-camera-reels fs-1 mb-3"></i>
                        <h5 class="card-title" style="font-weight: 600;">Kualitas Foto Terbaik</h5>
                        <p class="card-text">Kami hanya menggunakan peralatan fotografi terbaik untuk memastikan setiap momen Anda terekam dengan kualitas tinggi dan tajam.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <div class="card bg-light text-dark">
                    <div class="card-body text-center">
                        <i class="bi bi-chat-dots-fill fs-1 mb-3"></i>
                        <h5 class="card-title" style="font-weight: 600;">Layanan Pelanggan Terbaik</h5>
                        <p class="card-text">Kami percaya bahwa komunikasi adalah kunci. Tim kami selalu siap membantu Anda dengan respons cepat dan solusi yang tepat untuk kebutuhan fotografi Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5" data-aos="zoom-in" data-aos-duration="1200">
    <div class="container text-center">
        <h2 class="mb-4">Tertarik dengan Layanan Kami?</h2>
        <p class="lead mb-4" style="font-size: 1.01rem;">Kami siap membantu Anda mengabadikan momen terbaik dalam hidup Anda. Jelajahi layanan kami yang beragam atau langsung hubungi kami untuk mendapatkan informasi lebih lanjut!</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="https://wa.me/6281386040075?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20fotografi?"
                class="btn btn-success btn-lg d-flex align-items-center" target="_blank">
                <i class="bi bi-whatsapp me-2"></i> Hubungi Kami
            </a>
        </div>
        <img src="{{ asset('images/services.png') }}" class="img-fluid rounded mt-4" alt="Layanan Kami" style="max-width: 40%;" loading="lazy">
    </div>
</section>

@endsection