<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Homepage')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style/app.css') }}?v=1.0">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow p-3">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                Wansapiyu
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('portofolio') ? 'active' : '' }}" href="{{ route('portofolio') }}">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about.us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact.us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="text-white text-center text-md-start py-5" style="background-color: #0f4162;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase mb-3">WANSAPIYU</h5>
                    <p class="footer-text">We capture moments to create unforgettable memories. Professional photography services for all your special occasions.</p>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase mb-3">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-telephone-fill"></i> <a href="tel:+123456789" class="text-light">+628987654321</a></li>
                        <li><i class="bi bi-whatsapp"></i> <a href="tel:+123456789" class="text-light">+628987654321</a></li>
                        <li><i class="bi bi-envelope-fill"></i> <a href="mailto:info@yourphotography.com" class="text-light">info@yourphotography.com</a></li>
                        <li><i class="bi bi-geo-alt-fill"></i> 1234 Photography Street, Jakarta Pusat, Indonesia</li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase mb-3">Follow Us</h5>
                    <ul class="list-unstyled d-flex justify-content-center justify-content-md-start">
                        <li><a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#" class="text-light"><i class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase mb-3">Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Wedding Photography</a></li>
                        <li><a href="#" class="text-light">Corporate Events</a></li>
                        <li><a href="#" class="text-light">Portrait Sessions</a></li>
                        <li><a href="#" class="text-light">Gradutation Photography</a></li>
                        <li><a href="#" class="text-light">Product Brand</a></li>
                        <li><a href="#" class="text-light">Building & Offices</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-4">
                <p>&copy; 2024 Wansapiyu Photography. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        function initAOS() {
            AOS.init({
                duration: 1000,
                once: true,
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            initAOS();

            const navbar = document.querySelector('.navbar');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });

        if (typeof Turbolinks !== 'undefined') {
            document.addEventListener('turbolinks:load', function() {
                initAOS();
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.statistic-counter');

            counters.forEach(counter => {
                let count = 0;
                const targetValue = counter.getAttribute('data-count');
                const target = parseFloat(targetValue);
                const speed = 500;
                const type = counter.getAttribute('data-type');
                const isRating = counter.classList.contains('rating');
                const formatValue = (value) => {
                    if (isRating) {
                        return value.toFixed(1);
                    }

                    if (type === 'percent') {
                        return `${Math.floor(value)}%`;
                    } else if (targetValue.includes('+')) {
                        return `${Math.floor(value)}+`;
                    }
                    return Math.floor(value);
                };

                const updateCount = () => {
                    const increment = target / speed;
                    if (count < target) {
                        count += increment;
                        counter.innerText = formatValue(count);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = formatValue(target);
                    }
                };

                updateCount();
            });
        });
    </script>
</body>

</html>