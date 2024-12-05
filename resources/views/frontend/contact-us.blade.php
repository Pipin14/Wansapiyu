@extends('frontend.app')

@section('title', 'Contact Us')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="mb-5">
            <h2 class="display-4 text-primary text-center mb-4" data-aos="fade-up">Frequently Asked Questions</h2>
            <p class="lead text-muted text-center mb-4" data-aos="fade-up" data-aos-delay="200">Kami tahu bahwa Anda mungkin memiliki beberapa pertanyaan. Di bawah ini adalah jawaban atas pertanyaan yang sering diajukan oleh pelanggan kami.</p>

            <div class="accordion" id="faqAccordion">
                @foreach($faqs as $index => $faq)
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
                    <h2 class="accordion-header" id="faqHeading{{ $loop->index }}">
                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $loop->index }}">
                            {{ $faq->pertanyaan }}
                        </button>
                    </h2>
                    <div id="faqCollapse{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="faqHeading{{ $loop->index }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq->jawaban }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <!-- <div class="row align-items-center">
            <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="200">
                <img src="{{ asset('images/contact-us.png') }}" alt="Contact Us" class="img-fluid rounded">
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <h1 class="display-4 mb-4 text-primary">Hubungi Kami</h1>
                <p class="lead mb-4 text-muted">Kami siap membantu Anda. Kirimkan pertanyaan atau pesan Anda melalui formulir di bawah ini. Kami akan segera merespon Anda dengan penuh perhatian.</p>
                <p class="text-muted mb-4">Apakah Anda membutuhkan layanan kami atau ingin bertanya lebih lanjut? Kami akan senang mendengar dari Anda.</p>
                <form action="#" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">Harap masukkan nama lengkap Anda.</div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">Harap masukkan email yang valid.</div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                        <div class="invalid-feedback">Harap masukkan nomor telepon yang valid.</div>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        <div class="invalid-feedback">Harap masukkan pesan Anda.</div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                </form>
            </div>
        </div> -->

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center mb-4 text-primary" data-aos="fade-up">Lokasi Kami</h2>
                <div class="embed-responsive embed-responsive-16by9" data-aos="fade-up" data-aos-delay="300">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126191.
                        47145722045!2d106.53144105352802!3d-6.179460106396547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
                        1s0x2e69b23a600d7f77%3A0x60143b8ed57cfcf7!2sJakarta%2C%20Indonesia!5e0!3m2!1sen!2sus!4v1607357281290!5m2!1sen!2sus"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function() {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>