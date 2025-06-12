<footer class="section-sm bg-dark">
<!-- Footer -->
    {{-- <footer class="footer">
        <div class="container">
            <div class="row"> --}}
                <!-- Brand Section -->
                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="logo-section">
                        <div class="logo-icon">
                            <i class="fas fa-swimmer"></i>
                        </div>
                        <h2 class="brand-name">Tirta Nirwana</h2>
                    </div>
                    <p class="footer-description">
                        Pusat pelatihan renang terbaik untuk semua usia dan tingkat kemampuan. Kami berkomitmen memberikan pembelajaran renang yang aman dan menyenangkan.
                    </p>
                    <div class="social-icons">
                        <a href="https://facebook.com/" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div> --}}

                <!-- Programs Section -->
                {{-- <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Program</h5>
                    <ul>
                        <li><a href="#">Kelas Pemula</a></li>
                        <li><a href="#">Kelas Menengah</a></li>
                        <li><a href="#">Kelas Lanjutan</a></li>
                        <li><a href="#">Kelas Profesional</a></li>
                        <li><a href="#">Kelas Anak-anak</a></li>
                        <li><a href="#">Pelatihan Kompetisi</a></li>
                    </ul>
                </div> --}}

                <!-- Company Section -->
                {{-- <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Perusahaan</h5>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Program Kursus</a></li>
                        <li><a href="#">Tim</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div> --}}

                <!-- Contact & Newsletter Section -->
                {{-- <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Kontak Kami</h5>
                    <div class="contact-info mb-4">
                        <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Wonorejo Permai, Wonorejo, Kec. Rungkut, Surabaya, Jawa Timur 60296</p>
                        <p><i class="fas fa-phone"></i> (031) 1234-5678</p>
                        <p><i class="fas fa-envelope"></i> info@tirtanirwana.id</p>
                    </div>

                    <div class="newsletter-section">
                        <h5>Berlangganan Newsletter</h5>
                        <form>
                            <input type="email" class="newsletter-input" placeholder="Masukkan email Anda" required>
                            <button type="submit" class="btn-newsletter">
                                <i class="fas fa-paper-plane me-2"></i>Berlangganan
                            </button>
                        </form>
                    </div>
                </div>
            </div> --}}

            <!-- Copyright -->
            {{-- <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p class="mb-2">© Copyright 2025 <strong>Tirta Nirwana</strong>. All Rights Reserved</p>
                        <div class="d-flex justify-content-center flex-wrap">
                            <a href="#" class="me-3">Kebijakan Privasi</a>
                            <a href="#" class="me-3">Syarat & Ketentuan</a>
                            <a href="#">FAQ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
                    {{-- <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-2 col-md-4 col-6 mb-4">
                                <div class="footer-widget">
                                    <div class="logo">
                                        <img src="{{ asset('/front/images/logo-icon.png') }}" alt="Tirta Nirwana Logo" class="rounded-circle">
                                    </div>
                                    <h2 class="brand-name">Trita Nirwana</h2>
                                        <div class="block">
                                        <ul class="list-unstyled list-inline my-4 social-icons">
                                            <li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3"><a title="Explorer X Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                            </li>
                                        </div>
                                        <div>
                                        <h5 class="mb-4 text-primary font-secondary">Program</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="service-details.html">Kelas Pemula</a></li>
                                            <li class="mb-2"><a href="service-details.html">Kelas Menengah</a></li>
                                            <li class="mb-2"><a href="service-details.html">Kelas Lanjutan </a></li>
                                            <li class="mb-2"><a href="service-details.html">Kelas Profesional</a></li>
                                        </ul>
                                    </div>
                                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                                        <div class="footer-widget">
                                            <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
                                            <h5 class="mb-4 text-primary font-secondary">Company</h5>
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><a href="{{ route('Home') }}">Home</a>
                                                    <li class="mb-2"><a href="{{route('AboutUs')}}">About Us</a>
                                                    </li>
                                                    <li class="mb-2"><a href="{{route('Blog')}}">Blog</a>
                                                    </li>
                                                    <li class="mb-2"><a href="{{route('team')}}">Team</a>
                                                    </li>
                                                    <li class="mb-2"><a href="{{route('Contact')}}">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </div> s
                                                     </div>
                                                    <div class="col-lg-2 col-md-4 col-6 mb-4">
                                                        <div class="footer-widget">
                                                            <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                                                            <ul class="list-unstyled">
                                                                <li class="mb-2"><a class="text-black" href="privacy-policy.html">Privacy Policy</a></li>
                                                                <li class="mb-2"><a class="text-black" href="terms.html">Terms & Conditions</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 col-12 mb-4">
                                                        <div class="footer-widget">
                                                            <h5 class="mb-4 text-primary font-secondary">Subscribe to our Newsletter</h5>
                                                            <form class="subscribe-form" action="#" method="post">
                                                                <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                                                <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
                                                            </form>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="copyright text-center mt-4 pt-3 border-top">
                                                                <p class="mb-2">© <span>Copyright</span> <strong class="px-1 sitename">2025</strong> <span>All Rights Reserved</span></p>
                                                                <div class="credits"> 
                                                                    Designed by <a href="">Tirta Nirwana</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

 <div class="container">
        <div class="row">
            <!-- Brand Section -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-widget">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('/front/images/logo-icon.png') }}" alt="AquaSwim Logo" class="rounded-circle me-2" width="40" height="40">
                        <h4 class="brand-name mb-0">Tirta Nirwana</h4>
                    </div>
                    <p class="text-muted mb-3">
                        Pusat pelatihan renang terbaik untuk semua usia dan tingkat kemampuan.
                    </p>
                    <div class="social-icons">
                        <a href="https://facebook.com/" title="Facebook" class="text-primary me-3">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.tiktok.com/@tirtanirwana1003?is_from_webapp=1&sender_device=pc" title="Tiktok" class="text-primary me-3">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="https://instagram.com/" title="Instagram" class="text-primary me-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Programs Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-3 text-primary font-secondary">Program</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="service-details.html" class="text-muted">Kelas Pemula</a></li>
                        <li class="mb-2"><a href="service-details.html" class="text-muted">Kelas Menengah</a></li>
                        <li class="mb-2"><a href="service-details.html" class="text-muted">Kelas Lanjutan</a></li>
                        <li class="mb-2"><a href="service-details.html" class="text-muted">Kelas Profesional</a></li>
                        <li class="mb-2"><a href="service-details.html" class="text-muted">Kelas Anak-anak</a></li>
                    </ul>
                </div>
            </div>

            <!-- Company Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-3 text-primary font-secondary">Company</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('Home') }}" class="text-muted">Home</a></li>
                        <li class="mb-2"><a href="{{ route('AboutUs') }}" class="text-muted">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('Blog') }}" class="text-muted">Blog</a></li>
                        <li class="mb-2"><a href="{{ route('team') }}" class="text-muted">Team</a></li>
                        <li class="mb-2"><a href="{{ route('team') }}" class="text-muted">Team</a></li>
                        <li class="mb-2"><a href="{{ route('galleries') }}" class="text-muted">Gallery</a></li>
                        <li class="mb-2"><a href="{{ route('Contact') }}" class="text-muted">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Other Links Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-3 text-primary font-secondary">Other Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="privacy-policy.html" class="text-muted">Privacy Policy</a></li>
                        <li class="mb-2"><a href="terms.html" class="text-muted">Terms & Conditions</a></li>
                        <li class="mb-2"><a href="#" class="text-muted">FAQ</a></li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter Section -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-3 text-primary font-secondary">Subscribe Newsletter</h5>
                    <p class="text-muted mb-3">Dapatkan informasi terbaru tentang program dan tips renang langsung ke email Anda.</p>
                    <form class="subscribe-form" action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Info Section -->
        <div class="row border-top pt-4 mt-4">
            <div class="col-lg-6 col-md-8 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-3 text-primary font-secondary">Contact Info</h5>
                    <div class="contact-info">
                        <p class="mb-2 text-muted">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            Jl. Raya Wonorejo Permai, Wonorejo, Kec. Rungkut, Surabaya, Jawa Timur 60296
                        </p>
                        <p class="mb-2 text-muted">
                            <i class="fas fa-phone text-primary me-2"></i>
                            (031) 1234-5678
                        </p>
                        <p class="mb-2 text-muted">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            info@aquaswim.id
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="row">
            <div class="col-12">
                <div class="copyright text-center mt-4 pt-3 border-top">
                    <p class="mb-2 text-muted">
                        © <span>Copyright</span> <strong class="px-1 sitename text-primary">2025 Tirta Nirwana</strong> 
                        <span>All Rights Reserved</span>
                    </p>
                    <div class="credits text-muted"> 
                        Designed by <a href="#" class="text-primary">Tirta Nirwana</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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



                                            </footer>