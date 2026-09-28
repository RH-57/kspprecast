<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami - KSP Precast | Solusi Beton Pracetak Berkualitas</title>

  {{-- ✅ SEO Meta Tags --}}
  <meta name="description" content="Hubungi KSP Precast untuk konsultasi dan pemesanan beton pracetak berkualitas tinggi. Kami siap melayani kebutuhan proyek konstruksi Anda di seluruh Indonesia.">
  <meta name="keywords" content="Hubungi KSP Precast, kontak KSP Precast, alamat KSP Precast, telepon precast, pemesanan beton pracetak">
  <meta name="author" content="KSP Precast">
  <meta name="robots" content="index, follow">

  {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
  <meta property="og:title" content="Hubungi Kami - KSP Precast | Solusi Beton Pracetak Berkualitas">
  <meta property="og:description" content="Hubungi tim KSP Precast untuk informasi produk, penawaran harga, dan konsultasi proyek beton pracetak Anda.">
  <meta property="og:image" content="{{ asset('assets/web/img/og-precast.webp') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="KSP Precast">

  {{-- ✅ Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Hubungi Kami - KSP Precast">
  <meta name="twitter:description" content="Konsultasikan kebutuhan beton pracetak proyek Anda langsung dengan tim KSP Precast.">
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
        <i class="bi bi-headset"></i> Layanan Pelanggan
      </span>
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white mb-4">
        Hubungi Kami
      </h1>
      <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-300">
        Kami siap membantu Anda memberikan informasi spesifikasi, harga, serta solusi beton pracetak terbaik untuk proyek Anda.
      </p>
    </div>
  </section>

  {{-- Contact Info & Map Section --}}
  <section class="py-12 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

        {{-- Bagian Informasi Kontak (5 / 12) --}}
        <div class="lg:col-span-5 flex flex-col" data-aos="fade-right" data-aos-delay="100">
          <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 sm:p-8 flex-grow flex flex-col justify-between space-y-6">
            
            <div>
              <span class="text-sky-600 font-bold text-xs uppercase tracking-wider">Informasi Kontak</span>
              <h2 class="text-2xl font-bold text-slate-900 mt-1 mb-6">
                Kantor & Operasional
              </h2>

              <div class="space-y-6">
                {{-- Alamat --}}
                <div class="flex items-start space-x-4">
                  <div class="p-3 bg-sky-50 text-sky-600 rounded-xl border border-sky-100 shrink-0">
                    <i class="bi bi-geo-alt-fill text-xl"></i>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-slate-900 mb-1">Alamat</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                      {{ $contacts?->address ?? 'Alamat kantor belum dikonfigurasi.' }}
                    </p>
                  </div>
                </div>

                {{-- Telepon --}}
                <div class="flex items-start space-x-4">
                  <div class="p-3 bg-sky-50 text-sky-600 rounded-xl border border-sky-100 shrink-0">
                    <i class="bi bi-telephone-fill text-xl"></i>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-slate-900 mb-1">Telepon / WhatsApp</h3>
                    @if($contacts?->phone)
                      <a href="tel:+{{ $contacts->phone }}" class="text-sm text-slate-600 hover:text-sky-600 font-medium transition-colors">
                        +{{ $contacts->phone }}
                      </a>
                    @else
                      <p class="text-sm text-slate-600">-</p>
                    @endif
                  </div>
                </div>

                {{-- Email --}}
                <div class="flex items-start space-x-4">
                  <div class="p-3 bg-sky-50 text-sky-600 rounded-xl border border-sky-100 shrink-0">
                    <i class="bi bi-envelope-fill text-xl"></i>
                  </div>
                  <div>
                    <h3 class="text-sm font-semibold text-slate-900 mb-1">Email</h3>
                    @if($contacts?->email)
                      <a href="mailto:{{ $contacts->email }}" class="text-sm text-slate-600 hover:text-sky-600 font-medium transition-colors">
                        {{ $contacts->email }}
                      </a>
                    @else
                      <p class="text-sm text-slate-600">-</p>
                    @endif
                  </div>
                </div>
              </div>
            </div>

            {{-- CTA Langsung --}}
            <div class="pt-6 border-t border-slate-100">
              <a href="https://wa.me/{{ $contacts?->phone }}?text={{ urlencode('Halo KSP Precast, saya ingin berkonsultasi mengenai produk beton pracetak.') }}"
                 target="_blank"
                 class="w-full inline-flex items-center justify-center px-5 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-semibold text-sm shadow-md shadow-emerald-600/20 transition-all duration-200">
                <i class="bi bi-whatsapp me-2 text-lg"></i> Chat Via WhatsApp
              </a>
            </div>

          </div>
        </div>

        {{-- Bagian Peta / Google Maps (7 / 12) --}}
        <div class="lg:col-span-7 flex flex-col" data-aos="fade-left" data-aos-delay="200">
          <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden flex-grow min-h-[350px] lg:min-h-full relative [&_iframe]:w-full [&_iframe]:h-full [&_iframe]:border-0">
            @if($contacts?->maps)
              {!! $contacts->maps !!}
            @else
              <div class="w-full h-full min-h-[300px] flex items-center justify-center bg-slate-100 text-slate-400 text-sm">
                <i class="bi bi-map me-2 text-lg"></i> Peta lokasi belum dikonfigurasi.
              </div>
            @endif
          </div>
        </div>

      </div>
    </div>
  </section>

  @include('web.components.whatsapp')
  @include('web.components.footer')

  <script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true });
  </script>
</body>
</html>