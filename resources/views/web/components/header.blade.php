{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
            <span>KSP</span>Precast
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('paket-wisata*') ? 'active' : '' }}" href="{{ url('/paket-wisata') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('sewa-kendaraan*') ? 'active' : '' }}" href="{{ url('/sewa-kendaraan') }}">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ url('/hubungi-kami') }}">Hubungi Kami</a>
                </li>
            </ul>
            <a href="https://wa.me/6282255444203" class="btn btn-contact">Hubungi Kami!</a>
        </div>
    </div>
</nav>
