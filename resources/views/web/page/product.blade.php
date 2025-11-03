<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami - KSP Precast</title>
    <meta name="description" content="Temukan berbagai produk beton pracetak berkualitas tinggi dari KSP Precast untuk mendukung kebutuhan konstruksi Anda.">
    <meta name="keywords" content="beton pracetak, precast, produk beton, KSP Precast, konstruksi">
    <meta name="author" content="KSP Precast">

    {{-- AOS & Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{asset('build/assets/app-Buv9-TBA.css')}}">
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
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">
                {{ $selectedCategory ? 'Kategori: ' . optional($productCat->firstWhere('slug', $selectedCategory))->name : 'Semua Produk' }}
            </h2>
            <p class="text-muted">Pilih produk beton pracetak sesuai kebutuhan proyek Anda.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 kategori-filter" data-aos="fade-up" data-aos-delay="100">
                {{-- Tombol Semua --}}
                <a href="{{ route('web-product') }}"
                    class="btn btn-sm rounded-pill px-4 py-2 {{ !$selectedCategory ? 'btn-primary' : 'btn-outline-primary' }}">
                    Semua
                </a>

                {{-- Tombol Kategori --}}
                @foreach($productCat as $category)
                    <a href="{{ route('web-product', ['category' => $category->slug]) }}"
                        class="btn btn-sm rounded-pill px-4 py-2 {{ $selectedCategory === $category->slug ? 'btn-primary' : 'btn-outline-primary' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        @if($products->count())
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $product->cover_image) }}" class="card-img-top" alt="{{ $product->name }}">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between text-center p-4">
                            <div>
                            <a href="{{route('web-product-detail', $product->slug)}}" class="text-decoration-none"><h5 class="fw-bold text-primary mb-3">{{ $product->name }}</h5></a>
                            </div>
                            <div class="mt-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20beli%20{{ urlencode($product->name) }}."
                                target="_blank"
                                class="btn btn-primary w-100 rounded-pill mb-2">
                                <i class="bi bi-whatsapp me-2"></i>Beli
                            </a>
                            <a href="{{route('web-product-detail', $product->slug)}}" style="text-decoration: none;">Lihat Detail</a>
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

{{-- AOS --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration: 1000, once: true});</script>

</body>
</html>
