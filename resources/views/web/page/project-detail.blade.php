<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- ✅ SEO Title --}}
  <title>{{ $project->name }} | Proyek Beton Pracetak - KSP Precast</title>

  {{-- ✅ SEO Meta Description --}}
  <meta name="description"
        content="Proyek {{ $project->name }} merupakan salah satu proyek beton pracetak KSP Precast yang berlokasi di {{ $project->location }} pada tahun {{ $project->year }}. Dikerjakan dengan standar mutu tinggi, presisi, dan tepat waktu.">

  {{-- ✅ SEO Keywords --}}
  <meta name="keywords"
        content="proyek beton pracetak, proyek precast {{ $project->location }}, {{ $project->name }}, konstruksi beton precast, proyek infrastruktur beton, KSP Precast">

  <meta name="author" content="KSP Precast">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow, max-image-preview:large">

  {{-- ✅ Canonical --}}
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- ✅ Open Graph (WhatsApp, Facebook, LinkedIn) --}}
  <meta property="og:title" content="{{ $project->name }} | Proyek Beton Pracetak KSP Precast">
  <meta property="og:description"
        content="Dokumentasi proyek {{ $project->name }} di {{ $project->location }}. Proyek beton pracetak berkualitas tinggi oleh KSP Precast.">
  <meta property="og:image" content="{{ asset('storage/' . $project->cover_image) }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="KSP Precast">

  {{-- ✅ Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $project->name }} | Proyek KSP Precast">
  <meta name="twitter:description"
        content="Lihat detail proyek beton pracetak {{ $project->name }} yang dikerjakan KSP Precast.">
  <meta name="twitter:image" content="{{ asset('storage/' . $project->cover_image) }}">

  {{-- ✅ Favicon --}}
  <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

  {{-- AOS & Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- GLightbox --}}
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

  {{-- Alpine.js & Tailwind Build --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800 antialiased font-sans">

@include('web.components.header')

{{-- Hero Section --}}
<section class="relative bg-slate-900 text-white pt-28 pb-16 md:pt-36 md:pb-20 overflow-hidden">
  {{-- Background Image Overlay --}}
  <div class="absolute inset-0 z-0">
    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->name }}" class="w-full h-full object-cover opacity-20 blur-sm">
    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/70 to-slate-900/40"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
    {{-- Breadcrumb --}}
    <nav class="flex text-sm text-slate-400 mb-4" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2">
        <li class="inline-flex items-center">
          <a href="{{ route('web-project') }}" class="inline-flex items-center text-slate-300 hover:text-sky-400">
            <i class="bi bi-building me-2"></i> Portofolio Proyek
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <i class="bi bi-chevron-right mx-1 text-slate-500"></i>
            <span class="text-slate-400 line-clamp-1 max-w-[200px] sm:max-w-xs">{{ $project->name }}</span>
          </div>
        </li>
      </ol>
    </nav>

    <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold tracking-tight text-white mb-4">
      {{ $project->name }}
    </h1>

    <div class="flex flex-wrap items-center gap-4 text-sm text-slate-300">
      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-500/10 text-sky-400 border border-sky-500/20 font-medium">
        <i class="bi bi-geo-alt-fill"></i> {{ $project->location }}
      </span>
      <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-800 text-slate-300 border border-slate-700 font-medium">
        <i class="bi bi-calendar-event"></i> Tahun {{ $project->year }}
      </span>
    </div>
  </div>
</section>

{{-- Detail Project Section --}}
<section class="py-12 md:py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

      {{-- Kolom Kiri: Galeri Gambar (7 / 12) --}}
      <div class="lg:col-span-7 space-y-4" data-aos="fade-right">
        {{-- Gambar Utama --}}
        <div class="relative group overflow-hidden rounded-2xl bg-slate-200 border border-slate-200/80 shadow-sm aspect-[16/10]">
          <a href="{{ asset('storage/' . $project->cover_image) }}" class="glightbox block w-full h-full" data-gallery="project-gallery">
            <img src="{{ asset('storage/' . $project->cover_image) }}" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" 
                 alt="{{ $project->name }}">
            <div class="absolute inset-0 bg-slate-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
              <span class="bg-white/90 text-slate-900 px-4 py-2 rounded-xl text-xs font-bold shadow-lg backdrop-blur-md flex items-center gap-2">
                <i class="bi bi-arrows-angle-expand"></i> Perbesar Gambar
              </span>
            </div>
          </a>
        </div>

        {{-- Galeri Thumbnails --}}
        @if ($project->images->count())
          <div>
            <h4 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-3">Dokumentasi Proyek Lainnya</h4>
            <div class="grid grid-cols-3 sm:grid-cols-4 gap-3">
              @foreach($project->images as $img)
                <div class="relative group overflow-hidden rounded-xl bg-slate-100 border border-slate-200 aspect-square">
                  <a href="{{ asset('storage/' . $img->image) }}" class="glightbox block w-full h-full" data-gallery="project-gallery">
                    <img src="{{ asset('storage/' . $img->image) }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                         alt="{{ $project->name }}">
                    <div class="absolute inset-0 bg-slate-900/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
                      <i class="bi bi-plus-lg text-lg"></i>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>
          </div>
        @endif
      </div>

      {{-- Kolom Kanan: Deskripsi & Ringkasan Proyek (5 / 12) --}}
      <div class="lg:col-span-5 space-y-6" data-aos="fade-left">
        
        <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200/80 shadow-sm space-y-6">
          <h2 class="text-2xl font-bold text-slate-900 border-b border-slate-100 pb-4">
            Detail Informasi Proyek
          </h2>

          {{-- Spesifikasi Ringkas --}}
          <div class="grid grid-cols-2 gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100">
            <div class="flex items-start space-x-3">
              <div class="p-2.5 bg-sky-100 text-sky-600 rounded-lg shrink-0">
                <i class="bi bi-geo-alt-fill text-lg"></i>
              </div>
              <div>
                <span class="block text-xs font-medium text-slate-400 uppercase">Lokasi</span>
                <span class="text-sm font-semibold text-slate-800">{{ $project->location }}</span>
              </div>
            </div>

            <div class="flex items-start space-x-3">
              <div class="p-2.5 bg-sky-100 text-sky-600 rounded-lg shrink-0">
                <i class="bi bi-calendar-event-fill text-lg"></i>
              </div>
              <div>
                <span class="block text-xs font-medium text-slate-400 uppercase">Tahun Selesai</span>
                <span class="text-sm font-semibold text-slate-800">{{ $project->year }}</span>
              </div>
            </div>
          </div>

          {{-- Konten Deskripsi Proyek --}}
          <div class="prose prose-slate max-w-none text-slate-600 text-sm leading-relaxed space-y-3">
            <h3 class="text-base font-semibold text-slate-900 mb-2">Tentang Pengerjaan</h3>
            {!! $project->description !!}
          </div>

          {{-- Action Buttons --}}
          <div class="pt-4 border-t border-slate-100 space-y-3">
            <a href="https://wa.me/6281234567890?text={{ urlencode('Halo KSP Precast, saya ingin berkonsultasi mengenai proyek serupa dengan: ' . $project->name) }}" 
               target="_blank"
               class="w-full inline-flex items-center justify-center px-5 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-semibold text-sm transition-colors shadow-sm">
              <i class="bi bi-whatsapp me-2 text-lg"></i> Konsultasi Proyek Serupa
            </a>

            <a href="{{ route('web-project') }}" 
               class="w-full inline-flex items-center justify-center px-5 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 rounded-xl font-semibold text-sm transition-colors">
              <i class="bi bi-arrow-left me-2"></i> Kembali ke Daftar Proyek
            </a>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

{{-- Proyek Lainnya Section --}}
@if(isset($relatedProjects) && $relatedProjects->count())
<section class="py-12 md:py-16 bg-white border-t border-slate-200/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8" data-aos="fade-up">
      <div>
        <h3 class="text-2xl font-bold text-slate-900">Proyek Lainnya</h3>
        <p class="text-slate-600 text-sm mt-1">Lihat portofolio pengerjaan beton pracetak lainnya dari KSP Precast.</p>
      </div>
      <a href="{{ route('web-project') }}" class="hidden md:inline-flex items-center text-sm font-semibold text-sky-600 hover:text-sky-700">
        Lihat Semua Proyek <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($relatedProjects as $item)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full" 
             data-aos="fade-up" 
             data-aos-delay="{{ $loop->iteration * 100 }}">
          
          <div class="relative overflow-hidden aspect-[16/10] bg-slate-100">
            <img src="{{ asset('storage/' . $item->cover_image) }}" 
                 alt="{{ $item->name }}" 
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
            <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-md text-white text-xs font-semibold px-2.5 py-1 rounded-lg">
              {{ $item->year }}
            </div>
          </div>

          <div class="p-5 flex flex-col flex-grow justify-between">
            <div>
              <div class="flex items-center text-xs font-medium text-slate-500 mb-2">
                <i class="bi bi-geo-alt-fill text-sky-500 me-1"></i>
                <span>{{ $item->location }}</span>
              </div>
              <h4 class="font-bold text-base text-slate-900 group-hover:text-sky-600 transition-colors line-clamp-2 mb-3">
                {{ $item->name }}
              </h4>
            </div>

            <a href="{{ route('web-project-detail', $item->slug) }}" 
               class="inline-flex items-center justify-center w-full px-4 py-2 bg-slate-100 hover:bg-sky-600 text-slate-700 hover:text-white rounded-xl text-xs font-semibold transition-all duration-200">
              <span>Lihat Detail Proyek</span>
              <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>

        </div>
      @endforeach
    </div>

    <div class="mt-8 text-center md:hidden">
      <a href="{{ route('web-project') }}" class="inline-flex items-center text-sm font-semibold text-sky-600 hover:text-sky-700">
        Lihat Semua Proyek <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>
@endif

@include('web.components.whatsapp')
@include('web.components.footer')

<script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
{{-- Scripts --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
  const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>
</html>