<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - KSP Precast</title>
    <meta name="description" content="{{ $product->meta_description ?? 'Temukan detail produk beton pracetak berkualitas dari KSP Precast.' }}">
    <meta name="keywords" content="{{ $product->meta_keyword ?? 'beton pracetak, precast, produk beton, KSP Precast' }}">
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
        <h1 class="fw-bold">{{ $product->name }}</h1>
        <p class="lead mb-0">Detail produk beton pracetak KSP Precast</p>
    </div>
</section>

{{-- Detail Produk --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-start">
            {{-- Gambar utama & galeri --}}
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-3">
                    <img src="{{ asset('storage/' . $product->cover_image) }}"
                         class="img-fluid w-100" alt="{{ $product->name }}">
                </div>

                @if($product->images && count($product->images))
                <div class="row g-3">
                    @foreach($product->images as $img)
                    <div class="col-6 col-md-4">
                        <div class="gallery-item rounded-3 overflow-hidden shadow-sm">
                            <a href="{{ asset('storage/' . $img->image) }}" class="glightbox" data-gallery="project-gallery">
                            <img src="{{ asset('storage/' . $img->image) }}"
                                    class="img-fluid w-100 gallery-thumb"
                                    alt="{{ $product->name }}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            {{-- Detail Produk --}}
            <div class="col-lg-6" data-aos="fade-left">
                <div class="product-info d-flex flex-column" style="height: 100%;">
                    <div class="flex-grow-1 mb-4">

                        {{-- Nama Produk --}}
                        <h2 class="fw-bold text-primary mb-2">{{ $product->name }}</h2>

                        {{-- Harga Produk --}}
                        @if($product->variants && $product->variants->count() > 0)
                            <h4 class="text-success fw-bold mb-4">
                                Rp. <span id="product-price">{{ number_format($product->variants->first()->price, 0, ',', '.') }}</span>
                            </h4>
                        @else
                            <h4 class="text-success fw-bold mb-4">
                                Rp. <span id="product-price">{{ number_format($product->price, 0, ',', '.') }}</span>
                            </h4>
                        @endif

                        {{-- Varian --}}
                        @if($product->variants && $product->variants->count() > 0)
                            <div class="mb-4">
                                <strong class="d-block mb-2 text-muted">Pilih Varian:</strong>
                                <div id="variant-list">
                                    @foreach($product->variants as $variant)
                                        <span class="badge bg-outline-primary text-dark border border-primary me-1 mb-1 variant-badge"
                                            data-price="{{ $variant->price }}"
                                            style="cursor:pointer;">
                                            {{ $variant->name }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Deskripsi --}}
                        <div class="mb-4">
                            <strong class="d-block mb-2 text-muted">Deskripsi:</strong>
                            <div class="description-content scrollable-description">
                                {!! $product->description !!}
                            </div>
                        </div>

                    </div>

                    {{-- Tombol WhatsApp --}}
                    <a href="https://wa.me/6281234567890?text=Halo%20KSP%20Precast!%20Saya%20ingin%20membeli%20produk%20{{ urlencode($product->name) }}."
                    target="_blank"
                    class="btn btn-primary rounded-pill px-4 py-2 align-self-start">
                        <i class="bi bi-whatsapp me-2"></i>Hubungi via WhatsApp
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>

{{-- Produk Lain --}}
@if($relatedProducts->count())
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h3 class="fw-bold text-primary">Produk Lainnya</h3>
            <p class="text-muted">Lihat produk beton pracetak lainnya dari kami.</p>
        </div>

        <div class="row g-4">
            @foreach($relatedProducts as $item)
            <div class="col-6 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                    <img src="{{ asset('storage/' . $item->cover_image) }}" class="card-img-top" alt="{{ $item->name }}">
                    <div class="card-body text-center p-4">
                        <a href="{{ route('web-product-detail', $item->slug) }}" class="text-decoration-none">
                            <h6 class="fw-bold text-primary">{{ $item->name }}</h6>
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo%20Lira%20Tour!%20Saya%20ingin%20beli%20{{ urlencode($product->name) }}."
                            target="_blank"
                            class="btn btn-primary w-100 rounded-pill mb-2">
                            <i class="bi bi-whatsapp me-2"></i>Beli
                        </a>
                        <a href="{{route('web-product-detail', $product->slug)}}" style="text-decoration: none;">Lihat Detail</a>
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

<script src="{{asset('build/assets/app-Cquvts3j.js')}}"></script>
{{-- AOS --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({ duration: 1000, once: true });</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const variantBadges = document.querySelectorAll('.variant-badge');
    const priceEl = document.getElementById('product-price');

    variantBadges.forEach(badge => {
        badge.addEventListener('click', () => {
            // Hapus highlight sebelumnya
            variantBadges.forEach(b => b.classList.remove('bg-primary', 'text-white'));

            // Tambah highlight ke yang dipilih
            badge.classList.add('bg-primary', 'text-white');

            // Ambil harga dan ubah tampilan angka
            const price = parseFloat(badge.dataset.price);
            priceEl.textContent = price.toLocaleString('id-ID');
        });
    });
});
</script>



</body>
</html>
