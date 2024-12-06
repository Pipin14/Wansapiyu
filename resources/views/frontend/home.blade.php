@extends('frontend.app')

@section('title', 'Halaman Utama')

@section('content')
<section
    class="bg-light text-white text-center d-flex align-items-center justify-content-center hero-bg"
    style="background-image: url('{{ asset('images/bg-hero.jpg') }}');">
    <div class="container">
        <h1 class="display-3 font-weight-bold mb-4" data-aos="fade-down">
            Selamat Datang di WANSAPIYU!
        </h1>
        <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="500">
            Menangkap momen yang abadi dengan keanggunan dan kreativitas.
        </p>
        <a href="{{ route('layanan') }}" class="btn btn-light btn-lg px-5 py-3" data-aos="fade-up" data-aos-delay="500">
            Jelajahi Layanan Kami
        </a>
    </div>
</section>

<section class="py-5 bg-light" data-aos="fade-up" data-aos-delay="600">
    <div class="container text-center">
        <h2 class="display-4 font-weight-bold text-dark mb-4">Siapa Kami</h2>
        <p class="lead text-muted mb-5">Di [Nama Perusahaan], kami bersemangat untuk menangkap esensi dari momen kehidupan yang paling berharga.</p>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <h3 class="h5 text-primary mb-3">Visi Kami</h3>
                <p class="text-muted">Menjadi penyedia layanan fotografi terkemuka, dikenal karena kreativitas, profesionalisme, dan kemampuan untuk menangkap momen hidup yang paling berharga.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <h3 class="h5 text-primary mb-3">Keahlian Kami</h3>
                <p class="text-muted">Kami mengkhususkan diri dalam berbagai layanan fotografi, termasuk pernikahan, potret, acara, dan sesi foto kreatif yang disesuaikan dengan kebutuhan Anda.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                <h3 class="h5 text-primary mb-3">Janji Kami</h3>
                <p class="text-muted">Kami berjanji untuk memberikan layanan yang luar biasa, gambar berkualitas tinggi, dan pengalaman yang tak terlupakan, menjadikan kenangan Anda abadi.</p>
            </div>
        </div>
        <a href="{{ route('about.us') }}" class="btn btn-primary btn-lg mt-4" data-aos="fade-up" data-aos-delay="600">z Tentang Kami</a>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="h2 font-weight-bold text-dark mb-4" data-aos="fade-up">Portofolio Kami</h2>
        <p class="lead text-muted mb-5" data-aos="fade-up" data-aos-delay="700">Lihat beberapa karya kami yang menakjubkan yang menunjukkan kreativitas dan dedikasi kami dalam memberikan fotografi berkualitas tinggi.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($portofolios as $portofolio)
            <div class="col" data-aos="fade-up" data-aos-delay="700">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $portofolio->gambar_portofolio) }}" class="card-img-top" alt="{{ $portofolio->judul }}">
                    <div class="card-body">
                        <p class="card-text"><strong>{{ $portofolio->judul }}</strong></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="{{ route('portofolio') }}" class="btn btn-primary btn-lg mt-4" data-aos="fade-up" data-aos-delay="700">Lihat Semua Portofolio</a>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="h2 font-weight-bold text-dark mb-4" data-aos="fade-up">Mengapa Memilih Kami?</h2>
        <p class="lead text-muted mb-5" data-aos="fade-up" data-aos-delay="800">Kami menyediakan layanan fotografi berkualitas tinggi, kreatif, dan profesional yang menangkap momen spesial Anda dengan perhatian pada detail dan presisi.</p>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-people-fill text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title">Tim Berpengalaman</h5>
                        <p class="card-text">Fotografer kami memiliki bertahun-tahun pengalaman dan terampil dalam menangkap berbagai momen dengan profesionalisme.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-brush-fill text-success" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title">Visi Kreatif</h5>
                        <p class="card-text">Kami membawa pendekatan kreatif di setiap sesi, memastikan foto Anda mencerminkan gaya dan visi unik Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="icon mb-3">
                            <i class="bi bi-award-fill text-warning" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title">Kualitas Terjamin</h5>
                        <p class="card-text">Kami menggunakan peralatan dan teknik pengeditan terbaik untuk memastikan foto Anda memiliki kualitas terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5" data-aos="zoom-in" data-aos-duration="1200">
    <div class="container text-center">
        <h2 class="mb-4">Tertarik dengan Layanan Kami?</h2>
        <p class="lead mb-4">Kami siap membantu Anda mengabadikan momen terbaik dalam hidup Anda. Jelajahi layanan kami yang beragam atau langsung hubungi kami untuk mendapatkan informasi lebih lanjut!</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="https://wa.me/6281386040075?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20fotografi?"
                class="btn btn-success btn-lg d-flex align-items-center" target="_blank">
                <i class="bi bi-whatsapp me-2"></i> Hubungi Kami
            </a>
        </div>
        <img src="{{ asset('images/services.png') }}" class="img-fluid rounded mt-4" alt="Layanan Kami" style="max-width: 40%;">
    </div>
</section>

<section class="py-5" style="background-color: #91AC8F;">
    <div class="container">
        <h2 class="h3 mb-4 text-center text-white" style="font-size: 2.5rem;" data-aos="fade-up" data-aos-delay="500">Testimoni Klien</h2>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials->chunk(3) as $testimonialChunk)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="row">
                        @foreach($testimonialChunk as $testimonial)
                        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 300 }}">
                            <div class="testimonial-box shadow-sm p-4 bg-white rounded text-center">
                                <p class="lead" style="font-size: 1rem; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-height: 100px;">
                                    "{{ $testimonial->ulasan }}"
                                </p>
                                <p><strong style="font-size: 1.1rem;">- {{ $testimonial->nama_klien }}</strong></p>
                                <p class="text-muted" style="font-size: 0.9rem;">
                                    Rating:
                                    @for ($i = 0; $i < $testimonial->rating; $i++)
                                        <i class="bi bi-star-fill text-warning"></i>
                                        @endfor
                                        @for ($i = $testimonial->rating; $i < 5; $i++)
                                            <i class="bi bi-star text-muted"></i>
                                            @endfor
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<section class="py-5 bg-light text-black">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/rate.png') }}" alt="Ulasan Anda" class="img-fluid rounded ml-4" data-aos="fade-up">
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <h2 class="h2 font-weight-bold text-black mb-4">Ulasan Anda</h2>
                <p class="lead mb-4">Kami ingin mendengar dari Anda! Seberapa puas Anda dalam menggunakan pelayanan jasa fotografi dari kami. Terima kasih</p>
                <div class="row">
                    <form action="{{ route('submit.ulasan') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_klien" class="form-label">Nama Klien</label>
                            <input type="text" class="form-control" id="nama_klien" name="nama_klien" placeholder="Masukkan nama Anda" required>
                        </div>

                        <div class="mb-3">
                            <label for="ulasan" class="form-label">Ulasan Anda</label>
                            <textarea class="form-control" id="ulasan" name="ulasan" rows="4" maxlength="300" placeholder="Masukkan ulasan Anda di sini..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <div class="input-group">
                                <select class="form-select" id="rating" name="rating" required>
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection