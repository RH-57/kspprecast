<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami | Lira Tour</title>

    {{-- AOS Library --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('build/assets/app-BVhkBIX1.css')}}" rel="stylesheet">

</head>
<body>

@include('web.components.header')

{{-- HERO SECTION --}}
<section class="hero-about">
    <div class="container" data-aos="fade-up">
        <h1>Tentang Lira Tour</h1>
        <p>
            Kami adalah penyedia jasa wisata profesional di Yogyakarta yang berkomitmen menciptakan pengalaman liburan tak terlupakan
            melalui layanan yang ramah, terpercaya, dan penuh kehangatan.
        </p>
    </div>
</section>

{{-- SEJARAH / COMPANY STORY --}}
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('assets/web/img/about.jpg') }}" alt="Sejarah Lira Tour" class="img-fluid rounded-4 shadow-lg">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <h2 class="fw-bold text-primary mb-3">Cerita Kami</h2>
                <p class="text-muted lead">
                    Berdiri sejak tahun <strong>2015</strong>, Lira Tour berawal dari semangat menghadirkan kemudahan bagi wisatawan
                    yang ingin menikmati keindahan Jogja tanpa repot mengatur perjalanan sendiri.
                    Kini kami telah berkembang menjadi penyedia layanan wisata terlengkap
                    dengan jaringan profesional dan pelayanan berstandar tinggi.
                </p>
                <p class="text-muted">
                    Dari perjalanan kecil bersama pelanggan pertama kami hingga ribuan wisatawan yang mempercayakan liburannya,
                    kami terus berinovasi untuk memberikan pengalaman terbaik bagi setiap penjelajah.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- VISI MISI --}}
<section class="vision-section py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Visi & Misi</h2>
            <p class="text-muted">Fokus kami adalah menjadi mitra perjalanan terbaik bagi setiap wisatawan yang ingin menjelajahi pesona Indonesia.</p>
        </div>
        <div class="row gy-4">
            <div class="col-md-6" data-aos="fade-right">
                <div class="p-4 bg-white shadow-sm rounded-4 h-100">
                    <h5 class="fw-bold text-primary mb-3"><i class="bi bi-eye-fill me-2"></i>Visi Kami</h5>
                    <p class="text-muted">
                        Menjadi perusahaan wisata terdepan di Indonesia yang dikenal karena profesionalisme, inovasi,
                        dan pelayanan yang mengutamakan kepuasan pelanggan.
                    </p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="p-4 bg-white shadow-sm rounded-4 h-100">
                    <h5 class="fw-bold text-primary mb-3"><i class="bi bi-bullseye me-2"></i>Misi Kami</h5>
                    <ul class="text-muted list-unstyled">
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Memberikan pengalaman wisata yang aman dan berkesan</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Mengutamakan kenyamanan dan kepuasan pelanggan</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Membangun kerjasama dengan komunitas lokal</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Berinovasi dalam setiap layanan dan produk wisata</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CORE VALUES --}}
<section class="values-section py-5">
    <div class="container text-center">
        <div class="mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Nilai-Nilai Kami</h2>
            <p class="text-muted">Kami percaya bahwa pengalaman perjalanan terbaik lahir dari komitmen dan nilai yang kami pegang teguh.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-4 rounded-4 shadow-sm value-box h-100">
                    <i class="bi bi-heart-fill value-icon"></i>
                    <h5 class="fw-bold">Integritas</h5>
                    <p class="text-muted small">Kami menjunjung tinggi kejujuran dan tanggung jawab dalam setiap layanan.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="p-4 rounded-4 shadow-sm value-box h-100">
                    <i class="bi bi-people-fill value-icon"></i>
                    <h5 class="fw-bold">Kepuasan Pelanggan</h5>
                    <p class="text-muted small">Kebahagiaan pelanggan adalah prioritas utama kami dalam setiap perjalanan.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="p-4 rounded-4 shadow-sm value-box h-100">
                    <i class="bi bi-lightbulb-fill value-icon"></i>
                    <h5 class="fw-bold">Inovasi</h5>
                    <p class="text-muted small">Kami terus berinovasi untuk memberikan pengalaman wisata yang unik dan relevan.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="p-4 rounded-4 shadow-sm value-box h-100">
                    <i class="bi bi-globe-americas value-icon"></i>
                    <h5 class="fw-bold">Profesionalisme</h5>
                    <p class="text-muted small">Tim kami berpengalaman dan berdedikasi untuk memberikan layanan terbaik.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TEAM SECTION --}}
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Tim Kami</h2>
            <p class="text-muted">Kami adalah tim muda yang bersemangat membawa Anda menuju pengalaman wisata terbaik.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-sm-6" data-aos="zoom-in">
                <div class="card border-0 shadow-sm p-4 text-center rounded-4 team-card">
                    <img src="{{ asset('assets/web/img/rahmat.jpeg') }}" alt="CEO" class="mx-auto mb-3">
                    <h6 class="fw-bold text-primary mb-1">Rahmat Baktiar</h6>
                    <small class="text-muted d-block mb-2">Founder & CEO</small>
                    <p class="text-muted small">Berpengalaman lebih dari 10 tahun di industri pariwisata dan hospitality.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="card border-0 shadow-sm p-4 text-center rounded-4 team-card">
                    <img src="{{ asset('assets/web/img/lintang.jpeg') }}" alt="Marketing" class="mx-auto mb-3">
                    <h6 class="fw-bold text-primary mb-1">Lintang Ayu</h6>
                    <small class="text-muted d-block mb-2">Marketing Director</small>
                    <p class="text-muted small">Fokus pada strategi promosi digital dan kemitraan wisata.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="card border-0 shadow-sm p-4 text-center rounded-4 team-card">
                    <img src="{{ asset('assets/web/img/team3.jpg') }}" alt="Customer Service" class="mx-auto mb-3">
                    <h6 class="fw-bold text-primary mb-1">Sinta Dewi</h6>
                    <small class="text-muted d-block mb-2">Customer Relation</small>
                    <p class="text-muted small">Siap membantu pelanggan 24 jam dengan pelayanan ramah dan cepat.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.components.banner')
@include('web.components.whatsapp')
@include('web.components.footer')

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>
</body>
</html>
