<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami | Lira Tour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('build/assets/app-BVhkBIX1.css')}}" rel="stylesheet">
</head>
<body>

@include('web.components.header')

<!-- Hero Section -->
<section class="hero-contact">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p class="lead mt-3">Kami siap membantu Anda merencanakan liburan terbaik bersama Lira Tour.</p>
    </div>
</section>

<!-- Konten Utama -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 mb-5 contact-info">
            <div class="col-md-3 col-sm-6">
                <div class="card text-center p-4 h-100">
                    <i class="bi bi-geo-alt-fill mb-3"></i>
                    <h5 class="fw-bold">Alamat</h5>
                    <p class="text-muted">Jl. Malioboro No. 45, Yogyakarta, Indonesia</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card text-center p-4 h-100">
                    <i class="bi bi-telephone-fill mb-3"></i>
                    <h5 class="fw-bold">Telepon</h5>
                    <p class="text-muted">+62 812-3456-7890</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card text-center p-4 h-100">
                    <i class="bi bi-envelope-fill mb-3"></i>
                    <h5 class="fw-bold">Email</h5>
                    <p class="text-muted">info@liratour.com</p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="card text-center p-4 h-100">
                    <i class="bi bi-clock-fill mb-3"></i>
                    <h5 class="fw-bold">Jam Operasional</h5>
                    <p class="text-muted">Senin - Minggu<br>08.00 - 21.00 WIB</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center contact-form">
            <!-- Form -->
            <div class="col-lg-6 mb-4">
                <h3 class="fw-bold text-primary mb-4">Kirim Pesan</h3>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="subject" class="form-control" placeholder="Subjek Pesan">
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill px-5">Kirim Pesan</button>
                </form>
            </div>

            <!-- Map -->
            <div class="col-lg-6">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.156799781179!2d110.36467847597882!3d-7.775122177065264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5782b9dccc73%3A0x48db41b056ea6b7a!2sMalioboro%2C%20Yogyakarta!5e0!3m2!1sid!2sid!4v1725634567890!5m2!1sid!2sid"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.components.whatsapp')
@include('web.components.footer')
<script src="{{asset('build/assets/app-Bui8vA5R.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
