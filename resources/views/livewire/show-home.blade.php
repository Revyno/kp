<div>
  <main class="main">

  <div class="container">
    <div class="bg">
    <div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                {{-- <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#!" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_amount" class="form-label">Amount</label>
                                <input type="number" class="form-control shadow-none" id="loan_amount"
                                    placeholder="ex: 25000">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_how_long_for" class="form-label">How long for?</label>
                                <input type="number" class="form-control shadow-none" id="loan_how_long_for"
                                    placeholder="ex: 12">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_repayment" class="form-label">Repayment</label>
                                <input type="number" class="form-control shadow-none" id="loan_repayment"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control shadow-none" id="loan_full_name">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_email_address" class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none" id="loan_email_address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>
</div>

</div>
  </div>
  <!-- Hero Section -->
    {{-- <section id="hero" class="hero section dark-background">
        <div class="container d-flex flex-column align-items-left">
            <img src="front/images/pict1.jpg" alt="" data-aos="fade-in">
            <h2 data-aos="fade-up" data-aos-delay="100">Les Renang Terbaik & Terpercaya di Surabaya </h2>
            <p data-aos="fade-up" data-aos-delay="200">Selamat datang di website Tirta nirwana semoga harimu cerah selalu :3</p> 
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="#contact" class="btn-get-started">Daftar Sekarang</a>
                <a href="" class="glightbox btn-watch-video d-flex align-items-center">
                </div> 
            </div>
        </section>  --}}
        <!-- /Hero Section -->
        <section class=" banner bg-tertiary position-relative overflow-hidden">
            {{-- <img src="{{ asset('/front/images/bg1.jpg') }}" alt="Swimming pool background"> --}}
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="block text-center text-lg-start pe-0 pe-xl-5">
                    <h1 class="text-capitalize mb-4 ">Selamat datang Di Tirta Nirwana</h1>
                    {{-- <h1 class="text-capitalize mb-4 cssanimation typing">Selamat datang Di Tirta Nirwana</h1> --}}
                    
                    <p class="mb-4">Tirta Nirwana menyediakan pelatihan renang untuk anak-anak hingga dewasa, dengan pilihan kelas privat maupun reguler. Program pelatihan dirancang untuk membantu peserta mengembangkan keterampilan renang mereka, baik untuk tujuan rekreasi maupun kompetisi.</p> 
            </p> <a type="button"
                        class="btn btn-primary" href="{{route('AboutUs')}}" data-bs-toggle="modal"
                        data-bs-target="{{route('AboutUs')}}">See More<span style="font-size: 14px;"
                            class="ms-2 fas fa-arrow-right"></span></a>
                            {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                            </form> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="ps-lg-5 text-center">
                    <img loading="lazy" decoding="async" src="{{ asset('/front/images/home.png') }}"
                        alt="banner image" class="bd-placeholder-img rounded mx-auto d-block width-100 border-radius: 15px;">
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="has-shapes">
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff5500" fill-opacity="1" d="M0,96L14.1,90.7C28.2,85,56,75,85,101.3C112.9,128,141,192,169,192C197.6,192,226,128,254,101.3C282.4,75,311,85,339,85.3C367.1,85,395,75,424,106.7C451.8,139,480,213,508,213.3C536.5,213,565,139,593,101.3C621.2,64,649,64,678,53.3C705.9,43,734,21,762,26.7C790.6,32,819,64,847,90.7C875.3,117,904,139,932,144C960,149,988,139,1016,117.3C1044.7,96,1073,64,1101,53.3C1129.4,43,1158,53,1186,74.7C1214.1,96,1242,128,1271,154.7C1298.8,181,1327,203,1355,208C1383.5,213,1412,203,1426,197.3L1440,192L1440,0L1425.9,0C1411.8,0,1384,0,1355,0C1327.1,0,1299,0,1271,0C1242.4,0,1214,0,1186,0C1157.6,0,1129,0,1101,0C1072.9,0,1045,0,1016,0C988.2,0,960,0,932,0C903.5,0,875,0,847,0C818.8,0,791,0,762,0C734.1,0,706,0,678,0C649.4,0,621,0,593,0C564.7,0,536,0,508,0C480,0,452,0,424,0C395.3,0,367,0,339,0C310.6,0,282,0,254,0C225.9,0,198,0,169,0C141.2,0,113,0,85,0C56.5,0,28,0,14,0L0,0Z">
        </path></svg> 
        <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063"
                stroke="currentColor" stroke-miterlimit="10" />
        </svg>
        <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694"
                stroke="currentColor" stroke-miterlimit="10" />
            <path
                d="M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202"
                stroke="currentColor" stroke-miterlimit="10" /> 
        </svg> 
     </div> --}}
</section> 

<section class="section">
    <div class="container">
            <div class="row justify-content-center">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="section-title pt-4">
                    <p class="text-primary text-uppercase text-center fw-bold mb-3">Proses pendaftaran</p>
                    <h1>Proses Pendaftaran Tirta Nirwana</h1>
                     <a type="button"
                            class="ms-2 fas fa-arrow-right"></span></a>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipreiscing elit. Lacus penatibus tincidunt</p> --}}
                </div>
            </div>
            
                
           @if ($services->isNotEmpty())
               
           @php
               $i=1
               @endphp
            @foreach ($services as $service)
                
            
            <div class="col-lg-4 col-md-6 service-item">
                <a wire:navigate class="text-black" href="{{route('ServiceDetail',$service->id)}}">
                    <div class="block"> <span class="colored-box text-center h3 mb-4">{{$i++}}</span>
                        <h3 class="mb-3 service-title">{{$service['title']}}</h3>
                        <p class="mb-0 service-description">{{$service['short_desc']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
            
            @endif

        </div>
    </div>
    <section class="section">
       <div class="container">
        <div class="header">
            <h1>Jadwal Kursus</h1>
            <p class="section-subtitle">Jadwal Kursus Renang Profesional</p>
        </div>
        <div class="schedule-container">
            <table class="schedule-table">
                <div class="row">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Kelas Pemula</th>
                        <th>Kelas Menengah</th>
                        <th>Kelas Lanjutan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="day-cell">Senin</td>
                        <td class="time-cell beginner">09:00 - 10:30</td>
                        <td class="time-cell intermediate">15:00 - 16:30</td>
                        <td class="time-cell advanced">17:00 - 19:00</td>
                    </tr>
                    <tr>
                        <td class="day-cell">Selasa</td>
                        <td class="time-cell beginner">14:00 - 15:30</td>
                        <td class="time-cell intermediate">16:00 - 17:30</td>
                        <td class="empty-cell">-</td>
                    </tr>
                    <tr>
                        <td class="day-cell">Rabu</td>
                        <td class="time-cell beginner">09:00 - 10:30</td>
                        <td class="time-cell intermediate">15:00 - 16:30</td>
                        <td class="time-cell advanced">17:00 - 19:00</td>
                    </tr>
                    <tr>
                        <td class="day-cell">Kamis</td>
                        <td class="time-cell beginner">14:00 - 15:30</td>
                        <td class="time-cell intermediate">16:00 - 17:30</td>
                        <td class="empty-cell">-</td>
                    </tr>
                    <tr>
                        <td class="day-cell">Jumat</td>
                        <td class="time-cell beginner">09:00 - 10:30</td>
                        <td class="empty-cell">-</td>
                        <td class="time-cell advanced">17:00 - 19:00</td>
                    </tr>
                    <tr>
                        <td class="day-cell">Sabtu</td>
                        <td class="time-cell beginner">08:00 - 09:30<br>13:00 - 14:30</td>
                        <td class="time-cell intermediate">10:00 - 11:30<br>15:00 - 16:30</td>
                        <td class="time-cell advanced">17:00 - 19:00</td>
                    </tr>
                </tbody>
            </table>
        </section>
    
    <!-- Programs Section -->
    <section id="section" class="section bg-tertiary">
        <div class="container">
            <div class="section-title">
                <h2>Program Kursus Renang</h2>
                <p class="section-subtitle">Kami menawarkan berbagai program kursus renang untuk semua usia dan tingkat kemampuan</p>
            </div>
            
            <div class="programs-grid">
                <!-- Kelas Pemula -->
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Kelas Pemula</h3>
                    <p>Untuk anak-anak dan dewasa yang baru belajar berenang. Fokus pada pengenalan air dan teknik dasar.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> Pengenalan lingkungan air</li>
                        <li><i class="fas fa-check"></i> Teknik pernapasan dasar</li>
                        <li><i class="fas fa-check"></i> Mengapung dan meluncur</li>
                    </ul>
                    <div class="program-price">
                        <div class="price">Rp 850.000</div>
                        <div class="duration">8 pertemuan</div>
                    </div>
                </div>

                <!-- Kelas Menengah -->
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Kelas Menengah</h3>
                    <p>Untuk mereka yang sudah menguasai dasar-dasar berenang dan ingin meningkatkan teknik.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> Gaya bebas dan gaya dada</li>
                        <li><i class="fas fa-check"></i> Teknik pembalikan</li>
                        <li><i class="fas fa-check"></i> Latihan stamina dan kecepatan</li>
                    </ul>
                    <div class="program-price">
                        <div class="price">Rp 1.200.000</div>
                        <div class="duration">10 pertemuan</div>
                    </div>
                </div>

                <!-- Kelas Lanjutan -->
                <div class="program-card">
                    <div class="program-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Kelas Lanjutan</h3>
                    <p>Untuk perenang yang ingin menguasai semua gaya renang dan teknik kompetitif.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> Gaya kupu-kupu dan gaya punggung</li>
                        <li><i class="fas fa-check"></i> Teknik start dan pembalikan kompetitif</li>
                        <li><i class="fas fa-check"></i> Persiapan kompetisi</li>
                    </ul>
                    <div class="program-price">
                        <div class="price">Rp 1.500.000</div>
                        <div class="duration">12 pertemuan</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="section" class="section col-12 bg-dark">
        <div class="container">
            <div class="section-title">
                <h2>Testimoni Siswa</h2>
                <p class="section-subtitle">Apa kata mereka yang telah belajar bersama kami di Les Renang Surabaya Tirta Nirwana</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Budi Santoso</div>
                    <div class="testimonial-role">Karyawan Swasta</div>
                    <div class="testimonial-location">Surabaya Timur</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Pelatihnya sangat sabar dan profesional. Dalam 6 pertemuan saya yang awalnya takut air sudah bisa berenang gaya bebas dengan baik. Tempatnya juga bersih dan nyaman untuk belajar.</p>
                    <div class="review-date">2 bulan yang lalu</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Sari Wulandari</div>
                    <div class="testimonial-role">Ibu Rumah Tangga</div>
                    <div class="testimonial-location">Wonokromo, Surabaya</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Anak saya umur 7 tahun awalnya sangat takut air. Setelah les di sini selama 2 bulan, sekarang dia sudah mahir berenang dan bahkan ikut lomba renang sekolah. Coachnya ramah dan metodenya cocok untuk anak-anak.</p>
                    <div class="review-date">1 bulan yang lalu</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Ahmad Rizki</div>
                    <div class="testimonial-role">Mahasiswa</div>
                    <div class="testimonial-location">Gubeng, Surabaya</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Harganya terjangkau untuk kantong mahasiswa. Jadwalnya fleksibel dan bisa disesuaikan dengan kuliah. Sekarang saya sudah bisa 4 gaya renang dan sering ikut komunitas renang kampus.</p>
                    <div class="review-date">3 minggu yang lalu</div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Dewi Lestari</div>
                    <div class="testimonial-role">Pegawai Bank</div>
                    <div class="testimonial-location">Rungkut, Surabaya</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">Tempat lesnya bersih, air kolamnya jernih, dan fasilitas lengkap. Pelatihnya detail menjelaskan teknik renang yang benar. Rekomendasi banget untuk yang mau belajar renang di Surabaya.</p>
                    <div class="review-date">2 minggu yang lalu</div>
                    
                <div class="swiper init-swiper">
                 <script type="application/json" class="swiper-config">
                        {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        }
                        }
                       </script>
                {{-- <div class="slider-controls">
                    <button class="slider-btn" id="prevBtn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="slider-dots" id="sliderDots"></div>
                    <button class="slider-btn" id="nextBtn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div> --}}
                </div>
            </div>
        </div>
    {{-- <section id="testimoni" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Testimoni Siswa</h2>
                <p class="section-subtitle">Apa kata mereka yang telah belajar bersama kami</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Dian Permata</div>
                    <div class="testimonial-role">Siswa Kelas Pemula</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Saya dulu sangat takut air, tapi berkat metode pengajaran yang sabar dan menyenangkan dari pelatih di AquaSwim, sekarang saya sudah bisa berenang dengan percaya diri!"</p>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Rudi Hartono</div>
                    <div class="testimonial-role">Siswa Kelas Menengah</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Teknik mengajar yang detail dan personal membuat saya cepat menguasai gaya bebas dan gaya dada. Pelatih sangat memperhatikan setiap gerakan dan memberikan koreksi yang tepat."</p>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="testimonial-name">Maya Indah</div>
                    <div class="testimonial-role">Orang Tua Siswa</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">"Anak saya yang berusia 5 tahun awalnya sangat takut air. Setelah 4 pertemuan di AquaSwim, dia sudah berani bermain air dan mulai belajar mengapung. Pelatihannya sangat ramah dan sabar."</p>
                </div>
            </div>
        </div> --}}
    </section>
    <section class="section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
              <div class="section-title text-center">
                <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
                <h1>Frequently Asked Questions</h1>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="accordion accordion-border-bottom" id="accordionFAQ">
                @php
                    $x=0;
                @endphp
                @foreach ($faqs as $faq )
                    
                <div class="accordion-item">
                  <h2 class="accordion-header accordion-button h5 border-0 "
                    id="heading-{{$x}}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse-{{$x}}" aria-expanded="true"
                    aria-controls="collapse-{{$x}}">
                    {{$faq->question}}
                  </h2>
                  <div id="collapse-{{$x}}"
                    class="accordion-collapse border-0 "
                    aria-labelledby="heading-{{$x}}" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body py-0 content">{!! $faq->answer!!}</div>
                  </div>
                </div>
                @php
                    $x++;
                @endphp
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>

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
        
{{-- 
        <section class="section bg-tertiary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                     <div class="text-center">
                        <h3 class="mb-4">Testiomonial</h2>
                </div>
            </div>
        </div>
 <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="public\front\images\IMG_3516.JPG" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="front/images/testimonials/1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    
  
    </section> --}}
    {{-- <section class="section bg-tertiary">
        <section class="section bg-tertiary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="text-center">
                            <h2 class="mb-4">Contact</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus penatibus tincidunt</p>
                            <a wire:navigate href="{{route('Contact')}}" class="btn btn-primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div> --}}
              <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</section>
</div>
