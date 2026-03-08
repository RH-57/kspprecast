<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- SEO --}}
    <title>404 - Halaman Tidak Ditemukan | KSP Precast</title>
    <meta name="description" content="Halaman tidak ditemukan. Kembali ke website resmi KSP Precast, solusi beton pracetak berkualitas tinggi.">
    <meta name="robots" content="noindex, follow">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    {{-- AOS & Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-BVhkBIX1.css') }}">

    {{-- Custom Animation --}}
    <style>
        .floating {
            animation: floating 4s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-18px); }
            100% { transform: translateY(0px); }
        }

        .error-bg {
            background: linear-gradient(135deg, #f8faff, #eef3ff);
        }

        .error-number {
            font-size: clamp(6rem, 15vw, 10rem);
            font-weight: 800;
            letter-spacing: -4px;
        }
    </style>
</head>
<body>

<section class="min-vh-100 d-flex align-items-center error-bg position-relative overflow-hidden">

    <!-- Decorative Shape -->
    <div class="position-absolute top-0 end-0 w-50 h-50"
         style="background: radial-gradient(circle, rgba(13,110,253,0.15), transparent 70%);">
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center gy-5">

            <!-- Illustration -->
            <div class="col-lg-6 text-center" data-aos="fade-right">
                <img
                    src="{{ asset('assets/web/img/404.webp') }}"
                    alt="404 Konstruksi Tidak Ditemukan"
                    class="img-fluid floating"
                    style="max-height: 420px;"
                    loading="lazy"
                >
            </div>

            <!-- Text Content -->
            <div class="col-lg-6 text-center text-lg-start">

                <div class="error-number text-primary mb-3" data-aos="zoom-in">
                    404
                </div>

                <h2 class="fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">
                    Oops! Halaman Tidak Ditemukan
                </h2>

                <p class="text-muted lead mb-4" data-aos="fade-up" data-aos-delay="200">
                    Sepertinya halaman yang Anda cari sedang dalam proses pembangunan
                    atau sudah dipindahkan.
                    Tenang, KSP Precast selalu siap membantu kebutuhan konstruksi Anda.
                </p>

                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start"
                     data-aos="fade-up" data-aos-delay="300">

                    <a href="{{ url('/') }}" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-house-door-fill me-2"></i>
                        Kembali ke Beranda
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>

<script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 120
    });
</script>

</body>
</html>
