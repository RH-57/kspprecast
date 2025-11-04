<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami - KSP Precast | Solusi Beton Pracetak Berkualitas</title>

  {{-- ✅ SEO Meta Tags --}}
  <meta name="description" content="KSP Precast adalah penyedia beton pracetak berkualitas tinggi untuk proyek konstruksi. Kami berkomitmen menghadirkan solusi efisien, kuat, dan inovatif untuk kebutuhan infrastruktur Anda.">
  <meta name="keywords" content="KSP Precast, beton pracetak, precast concrete, supplier beton, konstruksi, panel beton, balok beton, kolom pracetak, proyek bangunan, precast Indonesia">
  <meta name="author" content="KSP Precast">
  <meta name="robots" content="index, follow">

  {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
  <meta property="og:title" content="Tentang Kami - KSP Precast | Solusi Beton Pracetak Berkualitas">
  <meta property="og:description" content="KSP Precast menghadirkan beton pracetak dengan mutu tinggi, efisiensi waktu, dan solusi konstruksi modern.">
  <meta property="og:image" content="{{ asset('assets/web/img/about.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="KSP Precast">

  {{-- ✅ Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Tentang Kami - KSP Precast">
  <meta name="twitter:description" content="KSP Precast menyediakan solusi beton pracetak untuk proyek konstruksi modern.">
  <meta name="twitter:image" content="{{ asset('assets/web/img/about.jpg') }}">

  {{-- ✅ Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- ✅ Favicon --}}
  <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

  {{-- AOS & Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- CSS utama --}}
  <link rel="stylesheet" href="{{asset('build/assets/app-Buv9-TBA.css')}}">
</head>
<body>

  @include('web.components.header')

  {{-- Hero Section --}}
  <section class="hero hero-about d-flex align-items-center text-center text-white">
    <div class="container" data-aos="fade-up">
      <h1 class="fw-bold mb-3">Tentang Kami</h1>
      <p class="lead mb-0">Solusi beton pracetak berkualitas untuk kebutuhan proyek Anda.</p>
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

  {{-- Visi & Misi --}}
  <section class="vision-mission py-5 bg-light">
    <div class="container text-center">
      <div class="row g-4">
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <i class="bi bi-eye-fill fs-1 text-primary mb-3"></i>
            <h5 class="fw-bold mb-2">Visi Kami</h5>
            <p class="text-muted mb-0">
              Menjadi perusahaan beton pracetak terdepan yang memberikan solusi konstruksi inovatif dan berkelanjutan.
            </p>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
            <i class="bi bi-flag-fill fs-1 text-primary mb-3"></i>
            <h5 class="fw-bold mb-2">Misi Kami</h5>
            <p class="text-muted mb-0">
              Memberikan produk berkualitas tinggi, layanan profesional, serta membangun kemitraan jangka panjang dengan pelanggan dan mitra bisnis kami.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Kenapa Memilih Kami --}}
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

    @include('web.components.banner')
    @include('web.components.whatsapp')
    @include('web.components.footer')

    <script src="{{asset('build/assets/app-Cquvts3j.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
</body>
</html>
