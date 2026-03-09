<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jual Beton Pracetak (Precast) Berkualitas | Harga Pabrik - KSP Precast</title>

    <meta name="description"
        content="Jual beton pracetak (precast) berkualitas tinggi langsung dari pabrik. Kuat, presisi, dan siap kirim ke seluruh Indonesia. Hubungi KSP Precast sekarang untuk harga terbaik!">

    <meta name="keywords"
        content="jual beton pracetak, harga beton precast, precast concrete indonesia, beton pracetak berkualitas, supplier precast, pabrik beton pracetak, KSP Precast">

    <meta name="author" content="KSP Precast">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="Jual Beton Pracetak Berkualitas | KSP Precast">
    <meta property="og:description"
        content="Solusi beton pracetak kuat dan presisi untuk proyek konstruksi Anda. Harga kompetitif, produksi pabrik, siap kirim.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jual Beton Pracetak Berkualitas | KSP Precast">
    <meta name="twitter:description"
        content="Butuh beton pracetak kuat & presisi? KSP Precast siap supply untuk proyek Anda.">
    <meta name="twitter:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

    {{-- AOS & Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{asset('build/assets/app-BVhkBIX1.css')}}">
</head>

<body>

@include('web.components.header')

{{-- Hero --}}
<section class="hero-produk text-center d-flex align-items-center justify-content-center">
    <div class="overlay"></div>
    <div class="container position-relative text-white" data-aos="fade-up">
        <h1 class="fw-bold">Produk Beton Pracetak Kami</h1>
        <p class="lead">Solusi konstruksi efisien dan tahan lama dengan mutu pabrik terkontrol.</p>
    </div>
</section>

{{-- Daftar Produk --}}
<section class="py-5 bg-light sewa-section">
    <div class="container">

        @if($products->count())
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-6 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-xl overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <a href="{{ route('web-product-detail', $product->slug) }}">
                                <img src="{{ asset('storage/' . $product->cover_image) }}"
                                    class="card-img-top"
                                    alt="{{ $product->name }}">
                            </a>
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between text-center p-4">
                            <div>
                                <a href="{{route('web-product-detail', $product->slug)}}" class="text-decoration-none">
                                    <h5 class="fw-bold mb-3" style="color:#3d94af;">{{ $product->name }}</h5>
                                </a>

                            </div>
                            <div class="mt-auto">
                                @if($product->lowest_price)
                                    <p class="text-muted mb-3">
                                        Mulai dari
                                        <span style="color:#3d94af;">
                                            Rp {{ number_format($product->lowest_price, 0, ',', '.') }}
                                        </span>
                                    </p>
                                @else
                                    <p class="text-muted mb-3">Harga sesuai spesifikasi</p>
                                @endif
                                <a href="https://wa.me/{{$contacts->phone}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20beli%20{{ urlencode($product->name) }}."
                                    target="_blank"
                                    class="btn btn-primary w-100 rounded-pill mb-2">
                                    <i class="bi bi-whatsapp me-2"></i>Hubungi Sales
                                </a>
                                <a href="{{route('web-product-detail', $product->slug)}}" style="text-decoration: none; color:#3d94af;">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @else
            <div class="text-center py-5" data-aos="fade-up">
                <i class="bi bi-box-seam fs-1 text-muted mb-3 d-block"></i>
                <p class="text-muted mb-0">Belum ada produk di kategori ini.</p>
            </div>
        @endif
    </div>
</section>

@include('web.components.banner')
@include('web.components.whatsapp')
@include('web.components.footer')

<script src="{{asset('build/assets/app-Bui8vA5R.js')}}"></script>
{{-- AOS --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration: 1000, once: true});</script>

</body>
</html>
