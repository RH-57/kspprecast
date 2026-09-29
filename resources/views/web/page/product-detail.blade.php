<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual {{ $product->name }} Berkualitas - KSP Precast</title>
    
    {{-- SEO Meta Tags --}}
    <meta name="description" content="{{ $product->meta_description ?? 'Temukan detail produk beton pracetak berkualitas dari KSP Precast.' }}">
    <meta name="keywords" content="{{ $product->meta_keyword ?? 'beton pracetak, precast, produk beton, KSP Precast' }}">
    <meta name="author" content="KSP Precast">

    {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
    <meta property="og:title" content="KSP Precast - {{ $product->name }}">
    <meta property="og:description" content="{{ $product->meta_description ?? 'KSP Precast menyediakan beton pracetak berkualitas tinggi untuk proyek konstruksi cepat, kuat, dan efisien.'}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('storage/' . $product->cover_image) }}">
    <meta property="og:site_name" content="KSP Precast">

    {{-- ✅ Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KSP Precast - {{ $product->name }}">
    <meta name="twitter:description" content="Spesialis beton pracetak berkualitas tinggi dengan efisiensi waktu dan mutu terjamin.">
    <meta name="twitter:image" content="{{ asset('storage/' . $product->cover_image) }}">

    {{-- ✅ Canonical URL & Favicon --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    {{-- AOS, Bootstrap Icons & GLightbox --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

    {{-- Alpine.js & Tailwind Build --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

@include('web.components.header')

{{-- Hero Section --}}
<section class="relative bg-slate-900 text-white pt-28 pb-16 md:pt-36 md:pb-24 overflow-hidden">
    {{-- Background Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/web/img/banner.webp') }}" alt="KSP Precast Banner" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-semibold bg-sky-500/10 text-sky-400 border border-sky-500/20 mb-4">
            <i class="bi bi-box-seam"></i> Detail Produk
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white mb-3">
            {{ $product->name }}
        </h1>
        <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-300">
            Spesifikasi & informasi lengkap produk beton pracetak KSP Precast
        </p>
    </div>
</section>

{{-- Detail Produk Section --}}
<section class="py-12 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            {{-- Gambar Utama & Galeri (6 / 12) --}}
            <div class="lg:col-span-6 space-y-4" data-aos="fade-right">
                {{-- Cover Image --}}
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden aspect-[4/3] relative group">
                    <a href="{{ asset('storage/' . $product->cover_image) }}" class="glightbox" data-gallery="product-gallery">
                        <img src="{{ asset('storage/' . $product->cover_image) }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             alt="{{ $product->name }}">
                    </a>
                </div>

                {{-- Additional Gallery Images --}}
                @if($product->images && count($product->images))
                <div class="grid grid-cols-4 gap-3">
                    @foreach($product->images as $img)
                    <div class="bg-white rounded-xl border border-slate-200/80 overflow-hidden aspect-square group shadow-xs">
                        <a href="{{ asset('storage/' . $img->image) }}" class="glightbox block w-full h-full" data-gallery="product-gallery">
                            <img src="{{ asset('storage/' . $img->image) }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                 alt="{{ $product->name }}">
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            {{-- Info & Spesifikasi Produk (6 / 12) --}}
            <div class="lg:col-span-6" data-aos="fade-left">
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 sm:p-8 flex flex-col justify-between h-full space-y-6">
                    
                    <div class="space-y-6">
                        {{-- Judul Produk --}}
                        <div>
                            <span class="text-sky-600 font-bold text-xs uppercase tracking-wider">KSP Precast</span>
                            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                                {{ $product->name }}
                            </h2>
                        </div>

                        {{-- Tampilan Harga --}}
                        <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <span class="text-xs text-slate-500 block mb-1">Estimasi Harga</span>
                            @if($product->variants && $product->variants->count() > 0)
                                <div class="text-2xl sm:text-3xl font-extrabold text-emerald-600">
                                    Rp <span id="product-price">{{ number_format($product->variants->first()->price, 0, ',', '.') }}</span>
                                </div>
                            @else
                                <div class="text-2xl sm:text-3xl font-extrabold text-emerald-600">
                                    Rp <span id="product-price">{{ number_format($product->price, 0, ',', '.') }}</span>
                                </div>
                            @endif
                        </div>

                        {{-- Varian Produk --}}
                        @if($product->variants && $product->variants->count() > 0)
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih Varian / Spesifikasi:</label>
                                <div id="variant-list" class="flex flex-wrap gap-2">
                                    @foreach($product->variants as $index => $variant)
                                        <button type="button"
                                                class="variant-badge px-3.5 py-2 text-xs sm:text-sm font-medium rounded-xl border transition-all duration-200 cursor-pointer
                                                {{ $index === 0 ? 'bg-sky-600 text-white border-sky-600 shadow-sm' : 'bg-white text-slate-700 border-slate-200 hover:border-sky-500 hover:text-sky-600' }}"
                                                data-price="{{ $variant->price }}">
                                            {{ $variant->name }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Deskripsi Produk --}}
                        <div>
                            <h3 class="text-sm font-semibold text-slate-900 mb-2">Deskripsi Produk:</h3>
                            <div class="text-slate-600 text-sm leading-relaxed prose prose-slate max-w-none prose-p:my-2 prose-ul:list-disc prose-ul:ms-4">
                                {!! $product->description !!}
                            </div>
                        </div>
                    </div>

                    {{-- CTA Whatsapp --}}
                    <div class="pt-6 border-t border-slate-100">
                        <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20berkonsultasi%20atau%20membeli%20produk%20{{ urlencode($product->name) }}."
                           target="_blank"
                           class="w-full inline-flex items-center justify-center px-6 py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-semibold text-sm shadow-md shadow-emerald-600/20 transition-all duration-200">
                            <i class="bi bi-whatsapp me-2 text-lg"></i> Hubungi Sales via WhatsApp
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- Produk Terkait --}}
@if($relatedProducts->count())
<section class="py-12 md:py-16 bg-slate-100/70 border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <h3 class="text-2xl font-bold text-slate-900">Produk Lainnya</h3>
            <p class="text-slate-600 text-sm mt-1">Jelajahi ragam produk beton pracetak berkualitas tinggi lainnya.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
            @foreach($relatedProducts as $item)
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                
                {{-- Cover Image --}}
                <div class="relative aspect-[4/3] bg-slate-100 overflow-hidden">
                    <a href="{{ route('web-product-detail', $item->slug) }}" class="block w-full h-full">
                        <img src="{{ asset('storage/' . $item->cover_image) }}" 
                             alt="{{ $item->name }}" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </a>
                </div>

                {{-- Card Body --}}
                <div class="p-4 flex flex-col flex-1 justify-between text-center">
                    <div>
                        <a href="{{ route('web-product-detail', $item->slug) }}" class="group-hover:text-sky-600 transition-colors">
                            <h4 class="text-sm sm:text-base font-bold text-slate-900 line-clamp-2 mb-2">
                                {{ $item->name }}
                            </h4>
                        </a>
                    </div>

                    <div class="mt-3 pt-3 border-t border-slate-100 space-y-2">
                        <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20beli%20{{ urlencode($item->name) }}."
                        target="_blank"
                        class="w-full inline-flex items-center justify-center space-x-1.5 px-3 py-2 sm:py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold rounded-xl shadow-sm hover:shadow transition-all duration-200 mb-2.5">
                            <i class="bi bi-whatsapp me-1.5 text-base"></i>
                            <span>Hubungi Sales</span>
                        </a>

                        <a href="{{ route('web-product-detail', $item->slug) }}" 
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
@endif

@include('web.components.banner')
@include('web.components.whatsapp')
@include('web.components.footer')

<script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
{{-- AOS & GLightbox --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
    AOS.init({ duration: 800, once: true });
    
    const lightbox = GLightbox({
        selector: '.glightbox'
    });

    // Interaktivitas Pilihan Varian
    document.addEventListener('DOMContentLoaded', function () {
        const variantBadges = document.querySelectorAll('.variant-badge');
        const priceEl = document.getElementById('product-price');

        variantBadges.forEach(badge => {
            badge.addEventListener('click', () => {
                // Reset styling semua badge varian
                variantBadges.forEach(b => {
                    b.classList.remove('bg-sky-600', 'text-white', 'border-sky-600', 'shadow-sm');
                    b.classList.add('bg-white', 'text-slate-700', 'border-slate-200');
                });

                // Set styling badge terpilih
                badge.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
                badge.classList.add('bg-sky-600', 'text-white', 'border-sky-600', 'shadow-sm');

                // Format & perbarui angka harga
                const price = parseFloat(badge.dataset.price);
                if (priceEl && !isNaN(price)) {
                    priceEl.textContent = price.toLocaleString('id-ID');
                }
            });
        });
    });
</script>

</body>
</html>