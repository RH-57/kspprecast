<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyek Kami - KSP Precast | Portofolio Konstruksi Beton Pracetak</title>

  {{-- ✅ SEO Meta Tags --}}
  <meta name="description" content="Lihat portofolio proyek KSP Precast. Kami telah menyelesaikan berbagai proyek konstruksi menggunakan beton pracetak berkualitas tinggi untuk infrastruktur dan gedung di seluruh Indonesia.">
  <meta name="keywords" content="proyek KSP Precast, beton pracetak, portofolio konstruksi, proyek infrastruktur, precast concrete, panel beton, konstruksi Indonesia">
  <meta name="author" content="KSP Precast">
  <meta name="robots" content="index, follow">

  {{-- ✅ Open Graph (Facebook, WhatsApp, LinkedIn) --}}
  <meta property="og:title" content="Proyek Kami - KSP Precast | Portofolio Konstruksi Beton Pracetak">
  <meta property="og:description" content="Berbagai proyek beton pracetak yang telah kami selesaikan dengan mutu dan presisi tinggi. Lihat portofolio lengkap kami.">
  <meta property="og:image" content="{{ asset('assets/web/img/project-cover.jpg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="KSP Precast">

  {{-- ✅ Twitter Card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Proyek Kami - KSP Precast">
  <meta name="twitter:description" content="Lihat portofolio proyek beton pracetak unggulan dari KSP Precast di seluruh Indonesia.">
  <meta name="twitter:image" content="{{ asset('assets/web/img/project-cover.jpg') }}">

  {{-- ✅ Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- ✅ Favicon --}}
  <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

  {{-- AOS & Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- CSS utama --}}
  <link rel="stylesheet" href="{{asset('build/assets/app-Buv9-TBA.css')}}">
</head>
<body>

  @include('web.components.header')

  {{-- Hero Section --}}
  <section class="hero-produk text-center d-flex align-items-center justify-content-center">
    <div class="overlay"></div>
    <div class="container position-relative text-white" data-aos="fade-up">
        <h1 class="fw-bold">Proyek Kami</h1>
        <p class="lead">Berbagai proyek konstruksi yang telah kami selesaikan dengan kualitas terbaik.</p>
    </div>
</section>


    <section class="projects-section py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Portofolio Proyek</h2>
                <p class="text-muted">Kami bangga telah dipercaya menjadi bagian dari berbagai pembangunan besar di Indonesia.</p>
            </div>

            <div class="row g-4">
            @foreach($projects as $project)
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="card project-card border-0 shadow-sm rounded-4 overflow-hidden h-100">

                        <!-- Gambar -->
                        <div class="project-thumb position-relative">
                        <img src="{{ asset('storage/' . $project->cover_image) }}" class="img-fluid w-100" alt="{{ $project->name }}">
                        </div>

                        <!-- Tombol di bawah gambar -->
                        <div class="text-center mt-3">
                            <a href="{{route('web-project-detail', $project->slug)}}" class="btn btn-primary rounded-pill px-4 py-2">
                                Lihat Detail
                            </a>
                        </div>

                        <!-- Isi card -->
                        <div class="card-body text-center p-4 pt-3">
                        <h5 class="fw-bold text-primary mb-2">{{ $project->name }}</h5>
                        <p class="text-muted small mb-1"><i class="bi bi-geo-alt-fill me-1"></i>{{ $project->location }}</p>
                        <span class="badge bg-light text-dark mt-2">
                            <i class="bi bi-calendar-event me-1"></i>{{ $project->year }}
                        </span>
                        </div>

                    </div>
                </div>

            @endforeach
            </div>
        </div>
    </section>


    @include('web.components.whatsapp')
  @include('web.components.footer')

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>AOS.init({ duration: 1000, once: true });</script>
</body>
</html>
