<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
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
  <meta property="og:image" content="{{ asset('assets/web/img/og-precast.webp') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="KSP Precast">

  {{-- ✅ Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Tentang Kami - KSP Precast">
  <meta name="twitter:description" content="KSP Precast menyediakan solusi beton pracetak untuk proyek konstruksi modern.">
  <meta name="twitter:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

  {{-- ✅ Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- ✅ Favicon --}}
  <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

  {{-- AOS & Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- Alpine.js & Tailwind Build --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

  @include('web.components.header')

  {{-- Hero Section --}}
  <section class="relative bg-slate-900 text-white pt-28 pb-16 md:pt-36 md:pb-24 overflow-hidden">
    {{-- Background Image Overlay --}}
    <div class="absolute inset-0 z-0">
      <img src="{{ asset('assets/web/img/banner.webp') }}" alt="KSP Precast Banner" class="w-full h-full object-cover opacity-20">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
      <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-semibold bg-sky-500/10 text-sky-400 border border-sky-500/20 mb-4">
        <i class="bi bi-info-circle"></i> Profil Perusahaan
      </span>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white mb-4">
        Tentang KSP Precast
      </h1>
      <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-300">
        Solusi beton pracetak berkualitas tinggi, presisi, dan terpercaya untuk menjawab berbagai tantangan konstruksi modern Anda.
      </p>
    </div>
  </section>

  {{-- About Section --}}
  <section id="about" class="py-12 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
        
        {{-- Gambar kiri (5 / 12) --}}
        <div class="lg:col-span-5" data-aos="fade-right">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-100 group">
            <img src="{{ asset('assets/web/img/about.webp') }}" alt="Tentang KSP Precast" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 via-transparent to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 p-4 bg-white/90 backdrop-blur-md rounded-xl border border-white/20 shadow-lg">
              <div class="flex items-center gap-3">
                <div class="p-3 bg-sky-600 text-white rounded-lg">
                  <i class="bi bi-shield-check text-2xl"></i>
                </div>
                <div>
                  <h4 class="font-bold text-slate-900 text-sm">Standar Mutu Tinggi</h4>
                  <p class="text-xs text-slate-600">Teruji presisi di lingkungan pabrik terkontrol.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Deskripsi kanan (7 / 12) --}}
        <div class="lg:col-span-7 space-y-6" data-aos="fade-left">
          <div>
            <span class="text-sky-600 font-bold text-sm uppercase tracking-wider">Mitra Konstruksi Andal</span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-slate-900 mt-1">
              Merevolusi Pembangunan dengan Beton Pracetak Presisi
            </h2>
          </div>

          <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
            <strong class="text-slate-800">KSP Precast</strong> adalah solusi terdepan Anda dalam penyediaan material konstruksi beton pracetak berkualitas tinggi. Kami berkomitmen untuk merevolusi pembangunan dengan menawarkan produk precast yang diproduksi secara presisi di lingkungan pabrik terkontrol, menjamin mutu yang konsisten untuk setiap proyek Anda.
          </p>

          <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
            Dengan menggunakan teknologi beton pracetak, kami membantu mempercepat jadwal konstruksi secara signifikan, mengurangi biaya operasional di lapangan, dan memastikan kekuatan struktural yang unggul. Kami siap menjadi mitra andal dalam mewujudkan pembangunan infrastruktur dan gedung yang efisien dan tahan lama.
          </p>

          <ul class="space-y-3 pt-2">
            <li class="flex items-center space-x-3 text-slate-700 text-sm font-medium">
              <span class="flex-shrink-0 w-6 h-6 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center">
                <i class="bi bi-check-lg"></i>
              </span>
              <span>Kualitas beton yang terjamin dan konsisten</span>
            </li>
            <li class="flex items-center space-x-3 text-slate-700 text-sm font-medium">
              <span class="flex-shrink-0 w-6 h-6 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center">
                <i class="bi bi-check-lg"></i>
              </span>
              <span>Pemasangan lebih cepat dan efisien waktu</span>
            </li>
            <li class="flex items-center space-x-3 text-slate-700 text-sm font-medium">
              <span class="flex-shrink-0 w-6 h-6 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center">
                <i class="bi bi-check-lg"></i>
              </span>
              <span>Beragam produk struktural precast (balok, kolom, panel, dll.)</span>
            </li>
          </ul>

          <div class="pt-4">
            <a href="{{ route('web-product') }}" class="inline-flex items-center justify-center px-6 py-3.5 bg-sky-600 hover:bg-sky-700 text-white rounded-xl font-semibold text-sm shadow-lg shadow-sky-600/25 transition-all duration-200">
              <span>Lihat Produk Kami</span>
              <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- Visi & Misi --}}
  <section class="py-12 md:py-16 bg-slate-100/70 border-y border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
        <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Komitmen & Tujuan Kami</h2>
        <p class="text-slate-600 text-sm mt-2">Prinsip utama yang megarahkan setiap langkah operasional dan inovasi KSP Precast.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        {{-- Visi Card --}}
        <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
          <div class="absolute top-0 right-0 w-32 h-32 bg-sky-500/5 rounded-bl-full transition-all group-hover:bg-sky-500/10"></div>
          <div class="w-14 h-14 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center mb-6 text-2xl font-bold">
            <i class="bi bi-eye-fill"></i>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">Visi Kami</h3>
          <p class="text-slate-600 leading-relaxed text-sm">
            Menjadi perusahaan beton pracetak terdepan yang memberikan solusi konstruksi inovatif, efisien, dan berkelanjutan bagi kemajuan infrastruktur di Indonesia.
          </p>
        </div>

        {{-- Misi Card --}}
        <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
          <div class="absolute top-0 right-0 w-32 h-32 bg-sky-500/5 rounded-bl-full transition-all group-hover:bg-sky-500/10"></div>
          <div class="w-14 h-14 bg-sky-100 text-sky-600 rounded-2xl flex items-center justify-center mb-6 text-2xl font-bold">
            <i class="bi bi-flag-fill"></i>
          </div>
          <h3 class="text-xl font-bold text-slate-900 mb-3">Misi Kami</h3>
          <p class="text-slate-600 leading-relaxed text-sm">
            Memberikan produk berkualitas tinggi, menerapkan layanan profesional dengan standar presisi mutakhir, serta membangun kemitraan jangka panjang yang saling menguntungkan dengan pelanggan dan mitra bisnis.
          </p>
        </div>
      </div>

    </div>
  </section>

  {{-- Kenapa Memilih Kami --}}
  <section id="why-us" class="py-16 md:py-24 bg-slate-900 text-white relative overflow-hidden">
    {{-- Decorative Background Gradients --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-full pointer-events-none opacity-20">
      <div class="absolute -top-24 left-10 w-96 h-96 bg-sky-500 rounded-full blur-3xl"></div>
      <div class="absolute bottom-0 right-10 w-96 h-96 bg-blue-600 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16" data-aos="fade-up">
        <span class="text-sky-400 font-semibold text-xs uppercase tracking-wider bg-sky-500/10 px-3 py-1 rounded-full border border-sky-500/20">Keunggulan Utama</span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mt-3">
          Kenapa Memilih KSP Precast?
        </h2>
        <p class="text-slate-300 text-sm sm:text-base mt-3">
          Kami bukan sekadar penyedia material, tetapi mitra konstruksi yang menjamin proyek Anda dibangun dengan mutu, kecepatan, dan efisiensi yang optimal.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        
        {{-- Card 1: Mutu Pabrik Terkontrol --}}
        <div class="bg-slate-800/80 backdrop-blur-md border border-slate-700/80 rounded-2xl p-6 sm:p-8 hover:border-sky-500/50 transition-all duration-300 flex flex-col h-full group" data-aos="zoom-in" data-aos-delay="100">
          <div class="w-14 h-14 bg-sky-500/10 text-sky-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 border border-sky-500/20">
            <i class="bi bi-gear-wide-connected text-2xl"></i>
          </div>
          <h3 class="text-lg font-bold text-white mb-3">Mutu Pabrik Terkontrol</h3>
          <p class="text-slate-300 text-sm leading-relaxed flex-grow">
            Produksi dilakukan di lingkungan pabrik yang terkontrol ketat, menjamin komposisi dan kekuatan beton yang homogen dan konsisten, jauh melampaui cor di tempat (*cast in situ*).
          </p>
        </div>

        {{-- Card 2: Konstruksi Lebih Cepat --}}
        <div class="bg-slate-800/80 backdrop-blur-md border border-slate-700/80 rounded-2xl p-6 sm:p-8 hover:border-sky-500/50 transition-all duration-300 flex flex-col h-full group" data-aos="zoom-in" data-aos-delay="200">
          <div class="w-14 h-14 bg-sky-500/10 text-sky-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 border border-sky-500/20">
            <i class="bi bi-clock-fill text-2xl"></i>
          </div>
          <h3 class="text-lg font-bold text-white mb-3">Konstruksi Lebih Cepat</h3>
          <p class="text-slate-300 text-sm leading-relaxed flex-grow">
            Elemen pracetak siap pasang mengurangi waktu konstruksi di lapangan hingga 50%. Menghemat waktu, mengurangi keterlambatan, dan mempercepat *return on investment* (ROI).
          </p>
        </div>

        {{-- Card 3: Sistem Terintegrasi --}}
        <div class="bg-slate-800/80 backdrop-blur-md border border-slate-700/80 rounded-2xl p-6 sm:p-8 hover:border-sky-500/50 transition-all duration-300 flex flex-col h-full group" data-aos="zoom-in" data-aos-delay="300">
          <div class="w-14 h-14 bg-sky-500/10 text-sky-400 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 border border-sky-500/20">
            <i class="bi bi-house-door-fill text-2xl"></i>
          </div>
          <h3 class="text-lg font-bold text-white mb-3">Sistem Bangunan Terintegrasi</h3>
          <p class="text-slate-300 text-sm leading-relaxed flex-grow">
            Kami menyediakan solusi precast yang terintegrasi, memastikan kompatibilitas antar komponen struktural, menghasilkan bangunan yang kokoh, presisi, dan tahan lama.
          </p>
        </div>

      </div>

    </div>
  </section>

  @include('web.components.banner')
  @include('web.components.whatsapp')
  @include('web.components.footer')

  <script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>