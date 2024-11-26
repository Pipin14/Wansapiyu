@extends('frontend.app')

@section('title', 'About Us')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <!-- Judul Halaman -->
        <h1 class="display-4 text-center mb-4" data-aos="fade-up">Tentang Kami</h1>
        <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="200">
            Kami adalah penyedia jasa fotografi profesional yang berdedikasi untuk menangkap momen terbaik Anda dengan penuh kreativitas dan kualitas tinggi.
        </p>

        <!-- Bagian Sejarah -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="h3 mb-3">Sejarah Kami</h2>
                <p>Kami berdiri sejak tahun 2010 dengan visi untuk membantu orang-orang mengabadikan momen istimewa dalam hidup mereka. Dengan pengalaman lebih dari satu dekade, kami telah melayani berbagai macam acara seperti pernikahan, ulang tahun, dan proyek korporasi.</p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('images/about/history.jpg') }}" class="img-fluid rounded shadow" alt="Sejarah Kami">
            </div>
        </div>

        <!-- Bagian Misi dan Visi -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2" data-aos="fade-left">
                <h2 class="h3 mb-3">Misi dan Visi</h2>
                <ul class="list-unstyled">
                    <li><strong>Misi:</strong> Menghadirkan layanan fotografi berkualitas tinggi dengan sentuhan personal.</li>
                    <li><strong>Visi:</strong> Menjadi pilihan utama untuk jasa fotografi di seluruh Indonesia.</li>
                </ul>
            </div>
            <div class="col-md-6 order-md-1" data-aos="fade-right">
                <img src="{{ asset('images/about/vision.jpg') }}" class="img-fluid rounded shadow" alt="Misi dan Visi">
            </div>
        </div>

        <!-- Bagian Tim Kami -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="h3 mb-4">Tim Kami</h2>
            <p class="lead text-muted mb-5">Kami didukung oleh tim fotografer profesional yang berdedikasi tinggi, siap menangkap setiap momen berharga Anda dengan kualitas terbaik.</p>
        </div>

        <div class="row justify-content-center">
            <!-- Anggota Tim 1 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in">
                <div class="card shadow-sm border-light rounded">
                    <img src="{{ asset('images/team/member1.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4" alt="John Doe" width="150">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">John Doe</h5>
                        <p class="text-muted mb-3">Fotografer Senior</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark mx-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota Tim 2 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card shadow-sm border-light rounded">
                    <img src="{{ asset('images/team/member1.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4" alt="Jane Smith" width="150">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Jane Smith</h5>
                        <p class="text-muted mb-3">Editor Profesional</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark mx-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Anggota Tim 3 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card shadow-sm border-light rounded">
                    <img src="{{ asset('images/team/member1.jpg') }}" class="card-img-top rounded-circle mx-auto mt-4" alt="Michael Brown" width="150">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">Michael Brown</h5>
                        <p class="text-muted mb-3">Asisten Fotografi</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark mx-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection