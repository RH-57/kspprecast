<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $project->name }} - KSPPrecast</title>

  {{-- AOS & Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- GLightbox CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('build/assets/app-Buv9-TBA.css')}}">
</head>
<body>

@include('web.components.header')

{{-- Hero Section --}}
<section class="hero-produk text-center d-flex align-items-center justify-content-center">
    <div class="overlay"></div>
    <div class="container position-relative text-white" data-aos="fade-up">
        <h1 class="fw-bold">{{ $project->name }}</h1>
    </div>
</section>



{{-- Detail Project --}}
<section class="project-detail py-5 bg-light">
  <div class="container">
    <div class="row g-5 align-items-start">

      {{-- Kolom Kiri: Gambar --}}
      <div class="col-12 col-lg-6" data-aos="fade-right">
        <div class="main-image shadow-sm rounded-4 overflow-hidden mb-3">
          <a href="{{ asset('storage/' . $project->cover_image) }}" class="glightbox" data-gallery="project-gallery">
            <img src="{{ asset('storage/' . $project->cover_image) }}" class="img-fluid w-100" alt="{{ $project->name }}">
          </a>
        </div>

        {{-- Galeri Tambahan --}}
        @if ($project->images->count())
        <div class="row g-3">
          @foreach($project->images as $img)
          <div class="col-6 col-md-4">
            <div class="gallery-item rounded-3 overflow-hidden shadow-sm">
              <a href="{{ asset('storage/' . $img->image) }}" class="glightbox" data-gallery="project-gallery">
                <img src="{{ asset('storage/' . $img->image) }}"
                     class="img-fluid w-100 gallery-thumb"
                     alt="{{ $project->name }}">
              </a>
            </div>
          </div>
          @endforeach
        </div>
        @endif
      </div>

      {{-- Kolom Kanan: Deskripsi --}}
      <div class="col-12 col-lg-6" data-aos="fade-left">
        <h2 class="fw-bold text-primary mb-3">Tentang Proyek</h2>
        <p class="text-muted">{!! $project->description !!}</p>

        <div class="mt-4">
            <div class="d-flex flex-wrap align-items-center gap-4 mb-3">
                {{-- Tahun --}}
                <div class="d-flex align-items-center">
                <i class="bi bi-calendar-event text-primary me-2 fs-5"></i>
                <div>
                    <small class="fw-semibold d-block">Tahun</small>
                    <small class="text-muted">{{ $project->year }}</small>
                </div>
                </div>

                {{-- Lokasi --}}
                <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt text-primary me-2 fs-5"></i>
                <div>
                    <small class="fw-semibold d-block">Lokasi</small>
                    <small class="text-muted">{{ $project->location }}</small>
                </div>
                </div>
            </div>

            <div class="mt-3">
                <a href="{{ route('web-project') }}" class="btn btn-outline-primary rounded-pill px-4 py-2">
                <i class="bi bi-arrow-left me-2"></i> Kembali ke Proyek
                </a>
            </div>
        </div>

      </div>

    </div>
  </div>
</section>

{{-- Proyek Lainnya --}}
@if(isset($relatedProjects) && $relatedProjects->count())
<section class="related-projects py-5">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h3 class="fw-bold text-primary">Proyek Lainnya</h3>
      <p class="text-muted">Lihat proyek serupa yang telah kami selesaikan.</p>
    </div>

    <div class="row g-4">
      @foreach($relatedProjects as $item)
      <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
          <img src="{{ asset('storage/' . $item->cover_image) }}" class="img-fluid w-100" alt="{{ $item->name }}">
          <div class="card-body text-center p-4">
            <h5 class="fw-bold text-primary mb-2">{{ $item->name }}</h5>
            <p class="text-muted small mb-1"><i class="bi bi-geo-alt-fill me-1"></i>{{ $item->location }}</p>
            <a href="{{ route('web-project-detail', $item->slug) }}" class="btn btn-primary rounded-pill px-4 py-2 mt-2">
              Lihat Detail
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@include('web.components.whatsapp')
@include('web.components.footer')

{{-- Scripts --}}
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
  const lightbox = GLightbox({ selector: '.glightbox' });
</script>

</body>
</html>
