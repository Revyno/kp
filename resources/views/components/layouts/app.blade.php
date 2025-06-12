<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Revel">
    <link rel="shortcut icon" href="{{ asset('/front/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/front/images/favicon.png') }}" type="image/x-icon">

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('/front/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/plugins/font-awesome/solid.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> --}}
    {{-- javascript cdn --}}

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS CSS -->
{{-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script> --}}
    <!-- # Main Style Sheet -->
    <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}">

    <title>{{ $title ?? 'Tirta Nirwana' }}</title>
    @livewireStyles
</head>

<body>
     <!-- Hero Section -->
    {{-- <section id="hero" class="hero section dark-background">
      <img src="assets/img/pict-1.jpg" alt="" data-aos="fade-in">
      <div class="container d-flex flex-column align-items-left">
        <h2 data-aos="fade-up" data-aos-delay="100">Les Renang Terbaik & Terpercaya di Surabaya </h2>
        <p data-aos="fade-up" data-aos-delay="200">Selamat datang di website Tirta nirwana semoga harimu cerah selalu :3</p> 
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#contact" class="btn-get-started">Daftar Sekarang</a>
          <a href="" class="glightbox btn-watch-video d-flex align-items-center">
        </div> 
      </div>
    </section> --}}
    <!-- /Hero Section -->





    <!-- navigation -->
    <header class="navigation bg-tertiary">
        <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
                <a wire:navigate class="navbar-brand" href="{{route('Home')}}">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="100"
                        src="{{ asset('/front/images/logo-icon.png') }}" alt="Wallet">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a wire:navigate class="nav-link" href="{{route('Home')}}">Home</a></li>
                        <li class="nav-item "> <a wire:navigate class="nav-link" href="{{route('AboutUs')}}">About Us</a></li>
                         <li class="nav-item dropdown">
          {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
             data-bs-toggle="dropdown" aria-expanded="false">
            Programs
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Program 1</a></li>
            <li><a class="dropdown-item" href="#">Program 2</a></li>
            <li><a class="dropdown-item" href="#">Program 3</a></li>
          </ul>
        </li> --}}
                        {{-- <li class="nav-item "> <a wire:navigate class="nav-link" href="">Programs</a></li> --}}
                        <li class="nav-item "> <a wire:navigate class="nav-link" href="{{route('team')}}">Our Team</a></li>
                        <li class="nav-item "><a wire:navigate class="nav-link " href="{{route('Blog')}}">Blog</a></li>
                        {{-- <li class="nav-item "><a wire:navigate class="nav-link " href="{{route('FAQ')}}">FAQ</a></li> --}}
                        {{-- <li class="nav-item "><a wire:navigate class="nav-link " href="{{route('Contact')}}">Contact Us</a></li> --}}
                        <li class="nav-item "><a wire:navigate class="nav-link " href="{{route('galleries')}}">Gallery</a></li>
                    </ul>
                     <a wire:navigate href="{{route('Contact')}}" class="btn btn-outline-primary">Contact us</a>
                    {{-- <a wire:navigate href="" class="btn btn-active ms-3" data-bs-toggle="button" aria-pressed="true" margin-left:100px; >Register</a> --}}
                    
                     {{-- <a href="" class="whatsapp-link" target="_blank" data-aos="zoom-in" data-aos-delay="200" aria-label="Hubungi kami via WhatsApp">
        <img src="{{ asset('front\images\whatsapp.png') }}" alt="WhatsApp" class="whatsapp-icon-img"
        width="50">
        <span class="whatsapp-tooltip"class="btn btn-outline-primary">Chat via WhatsApp</span>
    </a> --}}
    <div>
    <a href="https://wa.me/6285852532681?text=Halo, saya ingin bertanya" class="whatsapp-float" target="_blank" rel="noopener">
        <div class="whatsapp-icon">
            <svg viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.484 3.687"/>
            </svg>
        </div>
        <span class="whatsapp-text">Whatsapp</span>
    </a>
    </div>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
                    {{-- <a wire:navigate href="{{route('Contact')}}" class="btn btn-outline-primary">Contact Us</a> --}}
                </div>
            </div>
        </nav>
    </header>
    <!-- /navigation -->
    {{ $slot }}
   




    {{-- <footer class="section-sm bg-tertiary">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Service</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="service-details.html">Digital Marketing</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Web Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Logo Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">Graphic Design</a>
                            </li>
                            <li class="mb-2"><a href="service-details.html">SEO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#!">About Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Contact Us</a>
                            </li>
                            <li class="mb-2"><a href="#!">Blog</a>
                            </li>
                            <li class="mb-2"><a href="#!">Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="footer-widget">
                        <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                        <ul class="list-unstyled">
                            <li class="list-inline-item me-4"><a class="text-black"
                                    href="privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp;
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div> 
    </footer> --}}

    <x-footer > </x-footer>
    @livewireScripts
    <!-- # JS Plugins -->
    <script src="{{ asset('/front/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/front/plugins/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Vendor JS Files -->
    {{-- <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="front/vendor/php-email-form/validate.js"></script>
    <script src="front/vendor/aos/aos.js"></script>
    <script src="front/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="front/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="front/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="front/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="front/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}

    <!-- Vendor JS Files -->
    {{-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script> --}}

    <!-- Main Script -->
    <script src="{{ asset('/front/js/script.js') }}"></script>
</body>
</html>
