<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ✅ SEO Title dan Meta Description --}}
    <title>Solusi Beton Pracetak Berkualitas untuk Konstruksi Modern & Andal - KSP Precast</title>
    <meta name="description" content="KSP Precast menyediakan produk beton pracetak berkualitas tinggi dengan teknologi pabrik terkontrol. Mitra terpercaya untuk proyek konstruksi cepat, kuat, dan efisien.">
    <meta name="author" content="KSP Precast">

    {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
    <meta property="og:title" content="KSP Precast - Partner Tepat untuk Konstruksi Hebat">
    <meta property="og:description" content="KSP Precast menyediakan beton pracetak berkualitas tinggi untuk proyek konstruksi cepat, kuat, dan efisien.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/web/img/og-precast.webp') }}">
    <meta property="og:site_name" content="KSP Precast">

    {{-- ✅ Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KSP Precast - Partner Tepat untuk Konstruksi Hebat">
    <meta name="twitter:description" content="Spesialis beton pracetak berkualitas tinggi dengan efisiensi waktu dan mutu terjamin.">
    <meta name="twitter:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

    {{-- ✅ Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ✅ Favicon --}}
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    {{-- ✅ AOS & Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('web.components.header')

    <!-- Hero Section (Full Background Image) -->
    <section class="relative bg-slate-900 text-slate-800 min-h-[520px] lg:min-h-[580px] flex flex-col justify-between overflow-hidden">
        
        <!-- Full Width Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/web/img/banner.webp') }}" 
                alt="Proyek Precast KSP" 
                class="w-full h-full object-cover object-center">
            
            <!-- Overlay Gradasi Putih Tebal di Kiri & Gelap Tipis di Kanan -->
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 sm:via-white/50 to-black/50"></div>
        </div>

        <!-- Main Content Container -->
        <div class="relative z-10 max-w-7xl mx-auto px-2 sm:px-4 lg:px-6 pt-12 sm:pt-16 lg:pt-20 pb-10 w-full flex-1 flex flex-col justify-between">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <!-- Left Column: Headline & Action -->
                <div class="lg:col-span-7 space-y-6">
                    
                    <!-- Main Headline -->
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                        Solusi Precast <br />
                        <span class="text-slate-900">untuk Proyek Anda</span>
                    </h1>

                    <!-- Sub-description -->
                    <div class="text-xs sm:text-sm leading-relaxed space-y-1.5 max-w-xl">
                        <p class="font-bold text-slate-900">
                            Pagar Panel • U-Ditch • Box Culvert • RCP • Road Barrier
                        </p>
                        <p class="text-slate-700 font-medium">
                            Supply & Pemasangan untuk kebutuhan proyek di Jabodetabek dan Pulau Jawa.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex items-center gap-3 pt-1">
                        {{-- WhatsApp Button --}}
                        <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
                        target="_blank"
                        class="inline-flex items-center justify-center px-5 py-3 bg-emerald-600 hover:bg-emerald-700 active:bg-emerald-800 text-white font-bold text-xs sm:text-sm rounded-lg shadow-lg hover:shadow-emerald-600/30 transition-all duration-200 gap-2">
                            <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                <path d="M12.012 2c-5.508 0-9.989 4.478-9.99 9.984 0 1.761.458 3.481 1.328 5.001l-1.411 5.158 5.275-1.383c1.464.798 3.116 1.22 4.8 1.22h.004c5.508 0 9.989-4.479 9.99-9.986 0-2.666-1.037-5.172-2.923-7.058a9.914 9.914 0 00-7.063-2.936zm5.952 14.167c-.247.697-1.442 1.332-1.989 1.415-.526.08-1.206.113-3.528-.846-2.971-1.228-4.887-4.242-5.035-4.438-.148-.198-1.204-1.603-1.204-3.056 0-1.453.761-2.167 1.033-2.459.273-.292.593-.365.791-.365.197 0 .395.001.567.01.184.009.432-.07.674.512.247.594.841 2.052.915 2.201.074.148.124.321.025.518-.099.198-.148.321-.296.494-.148.173-.312.387-.446.521-.148.148-.302.309-.13.606.173.297.77 1.272 1.652 2.058 1.135 1.011 2.093 1.324 2.39 1.472.297.148.47.124.643-.074.173-.198.741-.865.939-1.162.198-.297.395-.247.667-.148.272.099 1.729.816 2.026.964.297.148.494.222.568.346.074.124.074.717-.173 1.414z"/>
                            </svg>
                            <span>Konsultasi via WhatsApp</span>
                        </a>

                        {{-- Product List Button --}}
                        <a href="{{ route('web-product') }}"
                        class="inline-flex items-center justify-center px-5 py-3 bg-blue-600 hover:bg-blue-700 active:bg-black text-white font-semibold text-xs sm:text-sm rounded-lg shadow-md transition-all duration-200">
                            <span>Lihat Produk</span>
                        </a>
                    </div>

                    <!-- Coverage Badges -->
                    <div class="pt-2">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-300/80 shadow-sm">
                                <x-heroicon-o-truck class="w-3.5 h-3.5 mr-1 text-blue-600" />
                                Pengiriman Jabodetabek
                            </span>

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-300/80 shadow-sm">
                                <x-heroicon-o-map-pin class="w-3.5 h-3.5 mr-1 text-blue-600" />
                                Banten
                            </span>

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-300/80 shadow-sm">
                                <x-heroicon-o-map-pin class="w-3.5 h-3.5 mr-1 text-blue-600" />
                                Jawa Barat
                            </span>

                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-300/80 shadow-sm">
                                <x-heroicon-o-map-pin class="w-3.5 h-3.5 mr-1 text-blue-600" />
                                Pulau Jawa
                            </span>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Slogan/Quote Floating Text -->
                <div class="lg:col-span-5 hidden lg:block text-right">
                    <div class="inline-block p-6 rounded-2xl bg-slate-900/40 backdrop-blur-sm border border-white/20">
                        <p class="text-white text-2xl lg:text-3xl font-bold italic tracking-wide leading-snug font-serif drop-shadow-md">
                            Bangun<br />
                            Lebih Cepat<br />
                            Lebih Kuat<br />
                            <span class="not-italic text-blue-300 font-sans font-extrabold">Bersama KSP</span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Highlight Section / Keunggulan Layanan --}}
    <section class="py-4 lg:py-8 bg-white border-y border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-6">
            
            <!-- Grid 5 Kolom Tetap Sejajar di Semua Layar -->
            <div class="grid grid-cols-5 gap-1 sm:gap-4">
                
                <!-- Item 1: Produk Berkualitas -->
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left p-1 md:p-3 rounded-xl hover:bg-slate-50 transition-colors duration-200">
                    <div class="flex-shrink-0 p-1.5 md:p-2.5 bg-blue-50 text-blue-600 rounded-lg mb-1 md:mb-0 md:mr-3.5">
                        <x-heroicon-o-shield-check class="w-4 h-4 md:w-6 md:h-6" />
                    </div>
                    <div>
                        <h4 class="text-[10px] sm:text-xs md:text-sm font-bold text-gray-900 leading-tight">Produk Berkualitas</h4>
                        <p class="hidden sm:block text-[11px] md:text-xs text-gray-500 mt-0.5">Standar Mutu SNI</p>
                    </div>
                </div>

                <!-- Item 2: Harga Kompetitif -->
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left p-1 md:p-3 rounded-xl hover:bg-slate-50 transition-colors duration-200">
                    <div class="flex-shrink-0 p-1.5 md:p-2.5 bg-blue-50 text-blue-600 rounded-lg mb-1 md:mb-0 md:mr-3.5">
                        <x-heroicon-o-tag class="w-4 h-4 md:w-6 md:h-6" />
                    </div>
                    <div>
                        <h4 class="text-[10px] sm:text-xs md:text-sm font-bold text-gray-900 leading-tight">Harga Kompetitif</h4>
                        <p class="hidden sm:block text-[11px] md:text-xs text-gray-500 mt-0.5">Kebutuhan Proyek</p>
                    </div>
                </div>

                <!-- Item 3: Pengiriman Proyek -->
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left p-1 md:p-3 rounded-xl hover:bg-slate-50 transition-colors duration-200">
                    <div class="flex-shrink-0 p-1.5 md:p-2.5 bg-blue-50 text-blue-600 rounded-lg mb-1 md:mb-0 md:mr-3.5">
                        <x-heroicon-o-truck class="w-4 h-4 md:w-6 md:h-6" />
                    </div>
                    <div>
                        <h4 class="text-[10px] sm:text-xs md:text-sm font-bold text-gray-900 leading-tight">Pengiriman Proyek</h4>
                        <p class="hidden sm:block text-[11px] md:text-xs text-gray-500 mt-0.5">Tepat Waktu</p>
                    </div>
                </div>

                <!-- Item 4: Support Teknis -->
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left p-1 md:p-3 rounded-xl hover:bg-slate-50 transition-colors duration-200">
                    <div class="flex-shrink-0 p-1.5 md:p-2.5 bg-blue-50 text-blue-600 rounded-lg mb-1 md:mb-0 md:mr-3.5">
                        <x-heroicon-o-user-group class="w-4 h-4 md:w-6 md:h-6" />
                    </div>
                    <div>
                        <h4 class="text-[10px] sm:text-xs md:text-sm font-bold text-gray-900 leading-tight">Support Teknis</h4>
                        <p class="hidden sm:block text-[11px] md:text-xs text-gray-500 mt-0.5">Konsultasi Gratis</p>
                    </div>
                </div>

                <!-- Item 5: Pemasangan Tersedia -->
                <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left p-1 md:p-3 rounded-xl hover:bg-slate-50 transition-colors duration-200">
                    <div class="flex-shrink-0 p-1.5 md:p-2.5 bg-blue-50 text-blue-600 rounded-lg mb-1 md:mb-0 md:mr-3.5">
                        <x-heroicon-o-wrench-screwdriver class="w-4 h-4 md:w-6 md:h-6" />
                    </div>
                    <div>
                        <h4 class="text-[10px] sm:text-xs md:text-sm font-bold text-gray-900 leading-tight">Pemasangan Tersedia</h4>
                        <p class="hidden sm:block text-[11px] md:text-xs text-gray-500 mt-0.5">Tim Berpengalaman</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- Produk --}}
    <section id="produk-unggulan" class="py-10 lg:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-6">
            
            <!-- Header Section: Judul di Kiri & Tombol di Kanan -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 lg:mb-10 gap-4" data-aos="fade-up">
                <div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
                        Produk Unggulan
                    </h2>
                    <p class="mt-2 text-sm sm:text-base text-gray-600">
                        Solusi konstruksi precast berkualitas tinggi untuk pembangunan Anda.
                    </p>
                </div>

                <!-- Tombol Lihat Semua Produk (Desktop & Mobile) -->
                <div class="flex-shrink-0">
                    <a href="{{ route('web-product') }}" 
                    class="inline-flex items-center space-x-2 px-4 py-2.5 bg-white border border-gray-200 hover:border-blue-600 text-gray-700 hover:text-blue-600 text-xs sm:text-sm font-semibold rounded-xl shadow-sm transition-all duration-200">
                        <span>Lihat Semua Produk</span>
                        <x-heroicon-o-arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Grid Produk (4 Kolom) -->
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                @foreach($products as $product)
                    <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden" 
                        data-aos="fade-up" 
                        data-aos-delay="{{ $loop->index * 50 }}">
                        
                        <!-- Thumbnail Image -->
                        <a href="{{ route('web-product-detail', $product->slug) }}" class="relative aspect-[4/3] overflow-hidden bg-gray-100 block">
                            <img src="{{ asset('storage/' . $product->cover_image) }}"
                                alt="{{ $product->name }}"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        </a>

                        <!-- Card Body -->
                        <div class="p-4 sm:p-5 flex-1 flex flex-col justify-between text-center">
                            <div>
                                <a href="{{ route('web-product-detail', $product->slug) }}" class="block group-hover:text-blue-600 transition-colors">
                                    <h3 class="text-sm sm:text-base font-bold text-gray-900 line-clamp-2 leading-snug">
                                        {{ $product->name }}
                                    </h3>
                                </a>
                            </div>

                            <!-- Harga & Action -->
                            <div class="mt-2 pt-1 border-t border-gray-50 flex flex-col items-center">
                                @if($product->lowest_price)
                                    <p class="text-xs text-gray-500">Mulai dari</p>
                                    <p class="text-sm sm:text-base font-extrabold text-blue-600 mb-3">
                                        Rp {{ number_format($product->lowest_price, 0, ',', '.') }}
                                    </p>
                                @else
                                    <p class="text-xs font-medium text-gray-500 mb-3">Harga sesuai spesifikasi</p>
                                @endif

                                <!-- Tombol WhatsApp Sales -->
                                <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20beli%20{{ urlencode($product->name) }}."
                                target="_blank"
                                class="w-full inline-flex items-center justify-center space-x-1.5 px-3 py-2 sm:py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-xl shadow-sm hover:shadow transition-all duration-200 mb-2.5">
                                    <x-heroicon-o-chat-bubble-left-right class="w-4 h-4" />
                                    <span>Hubungi Sales</span>
                                </a>

                                <!-- Link Detail Produk -->
                                <a href="{{ route('web-product-detail', $product->slug) }}" 
                                class="inline-flex items-center text-xs font-semibold text-blue-600 hover:text-blue-800 transition-colors">
                                    <span>Lihat Detail</span>
                                    <x-heroicon-o-arrow-right class="w-3.5 h-3.5 ml-1" />
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Section Kalkulator Pagar Panel Beton -->
    <section class="py-12 bg-slate-50" x-data="pagarCalculator()">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-6">
            <div class="bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 p-6 lg:p-10 items-center">
                    
                    <!-- Left Column: Gambar & Info -->
                    <div class="lg:col-span-5 space-y-4">
                        <div class="relative rounded-xl overflow-hidden shadow-md aspect-[4/3]">
                            <img src="{{ asset('assets/web/img/calc.webp') }}" alt="Pagar Panel Beton Terpasang" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end p-4">
                                <span class="text-white font-semibold text-sm">Pagar Panel Beton Precast</span>
                            </div>
                        </div>

                        <!-- Keunggulan Singkat -->
                        <div class="space-y-2 pt-2">
                            <div class="flex items-center text-xs font-semibold text-slate-700 gap-2">
                                <x-heroicon-o-check-badge class="w-4 h-4 text-blue-600" />
                                <span>Kuat & Tahan Lama (Standar K-225 / K-300)</span>
                            </div>
                            <div class="flex items-center text-xs font-semibold text-slate-700 gap-2">
                                <x-heroicon-o-check-badge class="w-4 h-4 text-blue-600" />
                                <span>Pemasangan Cepat & Presisi</span>
                            </div>
                            <div class="flex items-center text-xs font-semibold text-slate-700 gap-2">
                                <x-heroicon-o-check-badge class="w-4 h-4 text-blue-600" />
                                <span>Cocok untuk Industri, Perumahan, & Proyek Perkebunan</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Form Kalkulator Interaktif -->
                    <div class="lg:col-span-7 space-y-6">
                        <div>
                            <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900">
                                Pagar Panel Beton Terpasang
                            </h2>
                            <p class="text-sm text-slate-600 mt-1">
                                Hitung estimasi kebutuhan lembar panel dan kolom beton untuk proyek Anda.
                            </p>
                        </div>

                        <!-- Form Input -->
                        <div class="space-y-5 bg-slate-50 p-5 rounded-xl border border-slate-200/80">
                            <!-- Input Tinggi Pagar (Pilihan Button) -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">
                                    1. Pilih Tinggi Pagar (cm):
                                </label>
                                <div class="grid grid-cols-5 gap-2">
                                    <template x-for="t in [160, 200, 240, 280, 320]" :key="t">
                                        <button type="button" 
                                                @click="tinggi = t"
                                                :class="tinggi === t ? 'bg-blue-600 text-white border-blue-600 shadow-md' : 'bg-white text-slate-700 border-slate-300 hover:bg-slate-100'"
                                                class="py-2 px-1 text-xs sm:text-sm font-bold rounded-lg border transition-all text-center">
                                            <span x-text="t + ' cm'"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>

                            <!-- Input Panjang Pagar (Meter) -->
                            <div>
                                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1">
                                    2. Masukkan Panjang Pagar Total (Meter):
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <input type="number" 
                                        x-model.number="panjang" 
                                        min="1" 
                                        placeholder="Contoh: 100"
                                        class="w-full pl-4 pr-16 py-2.5 text-sm font-bold text-slate-900 bg-white border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-slate-500 font-semibold text-xs">
                                        Meter
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Hasil Perhitungan (Output) -->
                        <div class="bg-blue-50/80 border border-blue-200 p-5 rounded-xl space-y-4">
                            <div class="flex items-center justify-between border-b border-blue-200/60 pb-3">
                                <span class="text-xs font-bold text-slate-600 uppercase">Estimasi Kebutuhan Material:</span>
                                <span class="text-xs font-semibold text-blue-700 bg-blue-100 px-2.5 py-1 rounded-full" x-text="'Tinggi ' + tinggi + ' cm x Panjang ' + (panjang || 0) + ' M'"></span>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <!-- Hasil Panel -->
                                <div class="bg-white p-3.5 rounded-lg border border-blue-100 shadow-sm">
                                    <p class="text-[11px] font-semibold text-slate-500 uppercase">Lembar Panel Beton</p>
                                    <p class="text-2xl font-black text-slate-900 mt-1">
                                        <span x-text="totalPanel">0</span> <span class="text-xs font-normal text-slate-600">lembar</span>
                                    </p>
                                </div>

                                <!-- Hasil Kolom -->
                                <div class="bg-white p-3.5 rounded-lg border border-blue-100 shadow-sm">
                                    <p class="text-[11px] font-semibold text-slate-500 uppercase">Tiang / Kolom Beton</p>
                                    <p class="text-2xl font-black text-slate-900 mt-1">
                                        <span x-text="totalKolom">0</span> <span class="text-xs font-normal text-slate-600">batang</span>
                                    </p>
                                </div>
                            </div>

                            <!-- CTA Whatsapp membawa data hitungan -->
                            <div class="pt-2">
                                <a :href="'https://wa.me/{{ $contacts?->phone }}?text=' + encodeURIComponent('Halo KSP Precast! Saya mau minta penawaran untuk Pagar Panel Tinggi ' + tinggi + ' cm dengan Panjang ' + panjang + ' Meter. Estimasi kebutuhan: ' + totalPanel + ' lembar panel & ' + totalKolom + ' tiang kolom.')"
                                target="_blank"
                                class="w-full inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-bold text-sm rounded-lg shadow-md transition-all gap-2">
                                    <span>Minta Penawaran Harga</span>
                                    <x-heroicon-o-arrow-right class="w-4 h-4" />
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="project-experience" class="py-10 lg:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-6">
            
            <!-- Header Section: Judul di Kiri & Tombol di Kanan -->
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 lg:mb-10 gap-4" data-aos="fade-up">
                <div>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight">
                        Project Experience
                    </h2>
                    <p class="mt-2 text-sm sm:text-base text-gray-600">
                        Berbagai proyek konstruksi dan pracetak yang telah sukses kami kerjakan.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{ route('web-project') }}" 
                    class="inline-flex items-center space-x-2 px-4 py-2.5 bg-white border border-gray-200 hover:border-blue-600 text-gray-700 hover:text-blue-600 text-xs sm:text-sm font-semibold rounded-xl shadow-sm transition-all duration-200">
                        <span>Lihat Semua Proyek</span>
                        <x-heroicon-o-arrow-right class="w-4 h-4" />
                    </a>
                </div>
            </div>

            <!-- Grid Proyek (3 Kolom) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @foreach($projects as $project)
                    <div class="group bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden"
                        data-aos="fade-up" 
                        data-aos-delay="{{ $loop->index * 100 }}">
                        
                        <!-- Gambar Cover & Badge Lokasi/Tahun -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-gray-100">
                            <img src="{{ asset('storage/' . $project->cover_image) }}" 
                                alt="{{ $project->title }}" 
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                            
                            {{-- Overlay Gradient Halus --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                            {{-- Badge Lokasi (opsional) --}}
                            @if(!empty($project->location))
                                <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-md px-3 py-1 rounded-full flex items-center space-x-1 shadow-sm">
                                    <x-heroicon-o-map-pin class="w-3.5 h-3.5 text-blue-600" />
                                    <span class="text-xs font-medium text-gray-800">{{ $project->location }}</span>
                                </div>
                            @endif
                        </div>

                        <!-- Konten Card -->
                        <div class="p-5 sm:p-6 flex-1 flex flex-col justify-between">
                            <div>
                                {{-- Kategori Proyek / Tanggal --}}
                                @if(!empty($project->category))
                                    <span class="text-xs font-semibold text-blue-600 uppercase tracking-wider block mb-2">
                                        {{ $project->category->name ?? $project->category }}
                                    </span>
                                @endif

                                {{-- Judul Proyek --}}
                                <a href="{{ route('web-project-detail', $project->slug ?? $project->id) }}" class="block group-hover:text-blue-600 transition-colors">
                                    <h3 class="text-base sm:text-lg font-bold text-gray-900 leading-snug line-clamp-2">
                                        {{ $project->title }}
                                    </h3>
                                </a>

                                {{-- Deskripsi Singkat --}}
                                @if(!empty($project->description))
                                    <p class="mt-2 text-xs sm:text-sm text-gray-600 line-clamp-2 leading-relaxed">
                                        {{ strip_tags($project->description) }}
                                    </p>
                                @endif
                            </div>

                            <!-- Footer Card / Link Detail -->
                            <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-xs font-medium text-gray-400">
                                    {{ $project->created_at ? $project->created_at->format('M Y') : 'KSP Precast' }}
                                </span>
                                <a href="{{ route('web-project-detail', $project->slug ?? $project->id) }}" 
                                class="inline-flex items-center text-xs font-bold text-blue-600 group-hover:text-blue-700 transition-colors">
                                    <span>Detail Proyek</span>
                                    <x-heroicon-o-arrow-right class="w-3.5 h-3.5 ml-1 transition-transform group-hover:translate-x-1" />
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section>



    @include('web.components.banner')

    @include('web.components.whatsapp')

    @include('web.components.footer')
    <script src="{{asset('build/assets/app-Bui8vA5R.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true, // animasi hanya sekali
            offset: 100 // jarak mulai animasi
        });
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('pagarCalculator', () => ({
                tinggi: 200, // default 200cm
                panjang: 50, // default 50 meter

                get totalKolom() {
                    if (!this.panjang || this.panjang <= 0) return 0;
                    // Jarak antar kolom = 2.4 meter
                    return Math.ceil(this.panjang / 2.4) + 1;
                },

                get totalPanel() {
                    if (!this.panjang || this.panjang <= 0) return 0;
                    // Tinggi panel per lembar = 40cm (0.4m)
                    const lembarPerKolom = this.tinggi / 40;
                    const jumlahBay = Math.ceil(this.panjang / 2.4);
                    return jumlahBay * lembarPerKolom;
                }
            }))
        });
    </script>
</body>
</html>
