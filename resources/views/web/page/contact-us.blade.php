<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami - KSP Precast | Solusi Beton Pracetak Berkualitas</title>

  {{-- ✅ SEO Meta Tags --}}
  <meta name="description" content="KSP Precast adalah penyedia beton pracetak berkualitas tinggi untuk proyek konstruksi. Kami berkomitmen menghadirkan solusi efisien, kuat, dan inovatif untuk kebutuhan infrastruktur Anda.">
  <meta name="keywords" content="KSP Precast, beton pracetak, precast concrete, supplier beton, konstruksi, panel beton, balok beton, kolom pracetak, proyek bangunan, precast Indonesia">
  <meta name="author" content="KSP Precast">
  <meta name="robots" content="index, follow">

  {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
  <meta property="og:title" content="Hubungi Kami - KSP Precast | Solusi Beton Pracetak Berkualitas">
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
      <h1 class="fw-bold mb-3">Hubungi Kami</h1>
      <p class="lead mb-0">Kami siap membantu Anda untuk setiap kebutuhan beton pracetak.</p>
    </div>
  </section>

  {{-- Contact Info Section --}}
  <section class="contact-map-section py-5">
    <div class="container">
        <div class="row align-items-stretch g-4">

        <!-- Bagian Kontak -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info h-100 shadow-sm rounded-4 p-4 bg-white">
            <h2 class="fw-bold mb-4 text-primary">Hubungi Kami</h2>
            <div class="contact-item mb-4 d-flex align-items-start">
                <i class="bi bi-geo-alt-fill text-primary fs-3 me-3"></i>
                <div>
                <h6 class="fw-semibold mb-1">Alamat</h6>
                <p class="text-muted mb-0">{{$contacts->address}}</p>
                </div>
            </div>
            <div class="contact-item mb-4 d-flex align-items-start">
                <i class="bi bi-telephone-fill text-primary fs-3 me-3"></i>
                <div>
                <h6 class="fw-semibold mb-1">Telepon</h6>
                <p class="text-muted mb-1">+{{$contacts->phone}}</p>
                </div>
            </div>
            <div class="contact-item d-flex align-items-start">
                <i class="bi bi-envelope-fill text-primary fs-3 me-3"></i>
                <div>
                <h6 class="fw-semibold mb-1">Email</h6>
                <p class="text-muted mb-0">{{$contacts->email}}</p>
                </div>
            </div>
            </div>
        </div>

        <!-- Bagian Map -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="map-container rounded-4 overflow-hidden shadow-sm h-100">
            {!! $contacts->maps !!}
            </div>
        </div>

        </div>
    </div>
    </section>

    @include('web.components.whatsapp')

  @include('web.components.footer')

<script src="{{asset('build/assets/app-Cquvts3j.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>
</body>
</html>
