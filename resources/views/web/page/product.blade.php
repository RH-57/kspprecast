<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jual Beton Pracetak (Precast) Berkualitas | Harga Pabrik - KSP Precast</title>

    {{-- SEO Meta Tags --}}
    <meta name="description"
        content="Jual beton pracetak (precast) berkualitas tinggi langsung dari pabrik. Kuat, presisi, dan siap kirim ke seluruh Indonesia. Hubungi KSP Precast sekarang untuk harga terbaik!">
    <meta name="keywords"
        content="jual beton pracetak, harga beton precast, precast concrete indonesia, beton pracetak berkualitas, supplier precast, pabrik beton pracetak, KSP Precast">
    <meta name="author" content="KSP Precast">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="Jual Beton Pracetak Berkualitas | KSP Precast">
    <meta property="og:description"
        content="Solusi beton pracetak kuat dan presisi untuk proyek konstruksi Anda. Harga kompetitif, produksi pabrik, siap kirim.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jual Beton Pracetak Berkualitas | KSP Precast">
    <meta name="twitter:description"
        content="Butuh beton pracetak kuat & presisi? KSP Precast siap supply untuk proyek Anda.">
    <meta name="twitter:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    {{-- AOS & Bootstrap Icons --}}
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
            <i class="bi bi-box-seam"></i> Katalog Produk
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white mb-4">
            Produk Beton Pracetak Kami
        </h1>
        <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-300">
            Solusi konstruksi efisien, presisi, dan tahan lama dengan mutu standar pabrik terkontrol.
        </p>
    </div>
</section>

{{-- Daftar Produk --}}
<section class="py-12 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if($products->count())
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                @foreach($products as $product)
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                        
                        {{-- Cover Image --}}
                        <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                            <a href="{{ route('web-product-detail', $product->slug) }}" class="block w-full h-full">
                                <img src="{{ asset('storage/' . $product->cover_image) }}"
                                     alt="{{ $product->name }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </a>
                        </div>

                        {{-- Card Body --}}
                        <div class="p-4 sm:p-5 flex flex-col flex-1 justify-between text-center">
                            <div>
                                <a href="{{ route('web-product-detail', $product->slug) }}" class="group-hover:text-sky-600 transition-colors">
                                    <h3 class="text-sm sm:text-base font-bold text-gray-900 line-clamp-2 leading-snug">
                                        {{ $product->name }}
                                    </h3>
                                </a>
                            </div>

                            <div class="mt-2 pt-1 border-t border-gray-50 flex flex-col items-center">
                                {{-- Harga --}}
                                @if($product->lowest_price)
                                    <div>
                                        <p class="text-xs text-slate-500">Mulai dari</p>
                                        <p class="text-sm sm:text-base font-extrabold text-blue-600 mb-3">
                                            Rp {{ number_format($product->lowest_price, 0, ',', '.') }}
                                        </p>
                                    </div>
                                @else
                                    <p class="text-xs font-medium text-slate-500 mb-3">Harga sesuai spesifikasi</p>
                                @endif

                                {{-- Tombol WhatsApp --}}
                                <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20tanya%20mengenai%20produk%20{{ urlencode($product->name) }}."
                                   target="_blank"
                                   class="w-full inline-flex items-center justify-center space-x-1.5 px-3 py-2 sm:py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-xl shadow-sm hover:shadow transition-all duration-200 mb-2.5">
                                    <i class="bi bi-whatsapp me-1.5 text-base"></i> Hubungi Sales
                                </a>

                                {{-- Detail Link --}}
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
        @else
            {{-- Empty State --}}
            <div class="text-center py-16 bg-white rounded-2xl border border-slate-200/80 max-w-lg mx-auto" data-aos="fade-up">
                <div class="w-16 h-16 bg-slate-100 text-slate-400 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                    <i class="bi bi-box-seam"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-800 mb-1">Belum Ada Produk</h3>
                <p class="text-slate-500 text-sm">Produk beton pracetak belum tersedia pada kategori ini.</p>
            </div>
        @endif

    </div>
</section>

@include('web.components.banner')
@include('web.components.whatsapp')
@include('web.components.footer')

<script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
{{-- AOS --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true });
</script>

</body>
</html>