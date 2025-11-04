<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ✅ SEO Title dan Meta Description --}}
    <title>KSP Precast - Solusi Beton Pracetak Berkualitas Tinggi untuk Konstruksi Hebat</title>
    <meta name="description" content="KSP Precast menyediakan produk beton pracetak berkualitas tinggi dengan teknologi pabrik terkontrol. Mitra terpercaya untuk proyek konstruksi cepat, kuat, dan efisien.">
    <meta name="keywords" content="beton pracetak, precast, KSP Precast, konstruksi, material bangunan, panel beton, balok pracetak, kolom beton">
    <meta name="author" content="KSP Precast">

    {{-- ✅ Open Graph (Facebook, LinkedIn, WhatsApp) --}}
    <meta property="og:title" content="KSP Precast - Partner Tepat untuk Konstruksi Hebat">
    <meta property="og:description" content="KSP Precast menyediakan beton pracetak berkualitas tinggi untuk proyek konstruksi cepat, kuat, dan efisien.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/web/img/og-image.jpg') }}">
    <meta property="og:site_name" content="KSP Precast">

    {{-- ✅ Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KSP Precast - Partner Tepat untuk Konstruksi Hebat">
    <meta name="twitter:description" content="Spesialis beton pracetak berkualitas tinggi dengan efisiensi waktu dan mutu terjamin.">
    <meta name="twitter:image" content="{{ asset('assets/web/img/og-image.jpg') }}">

    {{-- ✅ Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ✅ Favicon --}}
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    {{-- ✅ AOS & Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('build/assets/app-Buv9-TBA.css')}}">
</head>
<body>

    @include('web.components.header')

   {{-- Hero Section --}}
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1>Partner Tepat untuk Konstruksi Hebat</h1>
                    <p>KSPPrecast adalah Spesialis beton precast berkualitas tinggi dengan harga terjangkau.</p>
                    <a href="https://wa.me/{{$contacts->phone}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak%20"
                                target="_blank" class="btn-hero"><i class="bi bi-whatsapp me-2"></i>Diskusi Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Tentang KSPPrecast</h2>
            </div>
            <div class="row gy-4">
                {{-- Gambar kiri --}}
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('assets/web/img/about.jpg') }}" alt="Tentang KSPPrecast" class="img-fluid rounded-4 shadow-lg" loading="lazy">
                </div>

                {{-- Deskripsi kanan --}}
                <div class="col-md-6" data-aos="fade-left">
                    <p class="lead text-muted">
                        KSPPrecast adalah solusi terdepan Anda dalam penyediaan material konstruksi beton pracetak berkualitas tinggi. Kami berkomitmen untuk merevolusi pembangunan dengan menawarkan produk precast yang diproduksi secara presisi di lingkungan pabrik terkontrol, menjamin mutu yang konsisten untuk setiap proyek Anda.
                        <br><br>
                        Dengan menggunakan teknologi beton pracetak, kami membantu mempercepat jadwal konstruksi secara signifikan, mengurangi biaya operasional di lapangan, dan memastikan kekuatan struktural yang unggul. Kami siap menjadi mitra andal dalam mewujudkan pembangunan infrastruktur dan gedung yang efisien dan tahan lama.
                    </p>
                    <ul class="list-unstyled mt-3">
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Kualitas beton yang terjamin dan konsisten</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Pemasangan lebih cepat dan efisien waktu</li>
                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i> Beragam produk struktural precast (balok, kolom, panel, dll.)</li>
                    </ul>
                    <a href="{{route('web-product')}}" class="btn btn-about mt-4">Lihat Produk Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="py-5 why-us-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-white">Kenapa Memilih KSPPrecast?</h2>
                <p class="text-white">Kami bukan sekadar penyedia material, tetapi mitra konstruksi yang menjamin proyek Anda dibangun dengan mutu, kecepatan, dan efisiensi yang optimal. Pilih keandalan, pilih KSPPrecast.</p>
            </div>

            <div class="row g-4">
                {{-- Card 1: Kualitas Terjamin (Quality) --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-gear-wide-connected text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Mutu Pabrik Terkontrol</h5>
                        <p class="text-muted">
                            Produksi dilakukan di lingkungan pabrik yang terkontrol ketat, menjamin komposisi dan kekuatan beton yang homogen dan konsisten, jauh melampaui cor di tempat (cast in situ).
                        </p>
                    </div>
                </div>

                {{-- Card 2: Kecepatan dan Efisiensi (Speed & Efficiency) --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-clock-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Konstruksi Lebih Cepat</h5>
                        <p class="text-muted">
                            Elemen pracetak siap pasang mengurangi waktu konstruksi di lapangan hingga 50%. Menghemat waktu, mengurangi keterlambatan, dan mempercepat *return on investment* (ROI).
                        </p>
                    </div>
                </div>

                {{-- Card 3: Keandalan Struktural (Reliability) --}}
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card border-0 shadow-lg rounded-4 h-100 text-center p-4 hover-card">
                        <div class="icon-wrapper mb-3">
                            <i class="bi bi-house-door-fill text-primary fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Sistem Bangunan Terintegrasi</h5>
                        <p class="text-muted">
                            Kami menyediakan solusi precast yang terintegrasi, memastikan kompatibilitas antar komponen struktural, menghasilkan bangunan yang kokoh, presisi, dan tahan lama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Produk --}}
    <section id="sewa-mobil" class="py-5 sewa-section bg-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Produk Unggulan KSPPrecast</h2>
            <p class="text-muted">Nikmati perjalanan nyaman dengan armada terbaik dari Lira Tour</p>
            </div>

            <div class="row g-4">
            @foreach($products as $product)
                <div class="col-6 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 car-card">
                        <div class="position-relative">
                            <img src="{{ asset('storage/' . $product->cover_image) }}" class="card-img-top" alt="{{ $product->name }}" loading="lazy">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between text-center p-4">
                            <div>
                            <a href="" class="text-decoration-none"><h5 class="fw-bold text-primary mb-3">{{ $product->name }}</h5></a>
                            </div>
                            <div class="mt-auto">
                            <a href="https://wa.me/{{$contacts->phone}}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20beli%20{{ urlencode($product->name) }}."
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
        </div>
    </section>



    @include('web.components.banner')

    @include('web.components.whatsapp')

    @include('web.components.footer')
    <script src="{{asset('build/assets/app-Cquvts3j.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true, // animasi hanya sekali
            offset: 100 // jarak mulai animasi
        });
    </script>
</body>
</html>
