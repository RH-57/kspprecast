<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lira Tour - Paket Wisata</title>
    {{-- AOS Library --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <link href="{{asset('build/assets/app-Dysi2LRN.css')}}" rel="stylesheet">
</head>
<body>

    @include('web.components.header')

   {{-- Hero Section --}}
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1>Partner Tepat untuk Konstruksi Hebat</h1>
                    <p>KSPPrecast adalah Spesialis beton precast berkualitas tinggi dengan harga terjangkau.</p>
                    <a href="#" class="btn-hero">Diskusi Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Tentang KSPPrecast</h2>
            </div>
            <div class="row gy-4">
                {{-- Gambar kiri --}}
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('assets/web/img/about.jpg') }}" alt="Tentang KSPPrecast" class="img-fluid rounded-4 shadow-lg">
                </div>

                {{-- Deskripsi kanan --}}
                <div class="col-md-6" data-aos="fade-left">
                    <p class="lead text-muted">
                        KSPPrecast adalah solusi terdepan Anda dalam penyediaan material konstruksi beton pracetak berkualitas tinggi. Kami berkomitmen untuk merevolusi pembangunan dengan menawarkan produk precast yang diproduksi secara presisi di lingkungan pabrik terkontrol, menjamin mutu yang konsisten untuk setiap proyek Anda.
                        <br><br>
                        Dengan menggunakan teknologi beton pracetak, kami membantu mempercepat jadwal konstruksi secara signifikan, mengurangi biaya operasional di lapangan, dan memastikan kekuatan struktural yang unggul. Kami siap menjadi mitra andal dalam mewujudkan pembangunan infrastruktur dan gedung yang efisien dan tahan lama.
                    </p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Kualitas beton yang terjamin dan konsisten</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Pemasangan lebih cepat dan efisien waktu</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Beragam produk struktural precast (balok, kolom, panel, dll.)</li>
                    </ul>
                    <a href="#" class="btn btn-about mt-4">Lihat Produk Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="py-5 why-us-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-white">Kenapa Memilih KSPPrecast?</h2>
                <p class="text-white">Kami bukan sekadar penyedia material, tetapi mitra konstruksi yang menjamin proyek Anda dibangun dengan mutu, kecepatan, dan efisiensi yang optimal. Pilih keandalan, pilih KSPPrecast.</p>
            </div>

            <div class="row g-4">
                {{-- Card 1: Kualitas Terjamin (Quality) --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-gear-wide-connected text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Mutu Pabrik Terkontrol</h5>
                        <p class="text-muted">
                            Produksi dilakukan di lingkungan pabrik yang terkontrol ketat, menjamin komposisi dan kekuatan beton yang homogen dan konsisten, jauh melampaui cor di tempat (cast in situ).
                        </p>
                    </div>
                </div>

                {{-- Card 2: Kecepatan dan Efisiensi (Speed & Efficiency) --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-clock-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Konstruksi Lebih Cepat</h5>
                        <p class="text-muted">
                            Elemen pracetak siap pasang mengurangi waktu konstruksi di lapangan hingga 50%. Menghemat waktu, mengurangi keterlambatan, dan mempercepat *return on investment* (ROI).
                        </p>
                    </div>
                </div>

                {{-- Card 3: Keandalan Struktural (Reliability) --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-house-door-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Sistem Bangunan Terintegrasi</h5>
                        <p class="text-muted">
                            Kami menyediakan solusi precast yang terintegrasi, memastikan kompatibilitas antar komponen struktural, menghasilkan bangunan yang kokoh, presisi, dan tahan lama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sewa Mobil & Bus Section --}}
    <section id="sewa-mobil" class="py-5 sewa-section bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Produk Unggulan KSPPrecast</h2>
                <p class="text-muted">Nikmati perjalanan nyaman dengan armada terbaik dari Lira Tour</p>
            </div>

            <div class="row g-4">
                {{-- Mobil 1 --}}
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('storage/products/u.jpg') }}" class="card-img-top" alt="Grand New Avanza">
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">U-Ditch (Saluran Terbuka)</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 550.000 <small class="text-muted">/ 12 Jam</small></p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Avanza%20FWD."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Beli
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('storage/products/u.jpg') }}" class="card-img-top" alt="Grand New Avanza">
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">U-Ditch (Saluran Terbuka)</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 550.000 <small class="text-muted">/ 12 Jam</small></p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Avanza%20FWD."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Beli
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('storage/products/u.jpg') }}" class="card-img-top" alt="Grand New Avanza">
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">U-Ditch (Saluran Terbuka)</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 550.000 <small class="text-muted">/ 12 Jam</small></p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Avanza%20FWD."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Beli
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('storage/products/u.jpg') }}" class="card-img-top" alt="Grand New Avanza">
                        </div>
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-primary">U-Ditch (Saluran Terbuka)</h5>
                            <p class="text-success fw-semibold mb-1">Rp. 550.000 <small class="text-muted">/ 12 Jam</small></p>
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20sewa%20Avanza%20FWD."
                            target="_blank" class="btn btn-primary w-100 rounded-pill">
                                <i class="bi bi-whatsapp me-2"></i>Beli
                            </a>
                            <a href="">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('web.components.banner')

    @include('web.components.whatsapp')

    @include('web.components.footer')
    <script src="{{asset('build/assets/app-gY57bFlj.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true, // animasi hanya sekali
            offset: 100 // jarak mulai animasi
        });
    </script>
</body>
</html>
