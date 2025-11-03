{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span>KSP</span>Precast
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('web-home') }}">Beranda</a>
                </li>

                {{-- Dropdown Produk --}}
                <!--<li class="nav-item dropdown custom-dropdown">
                    <a class="nav-link {{ Request::is('produk*') ? 'active' : '' }}" href="{{route('web-product')}}">
                        Produk <i class="bi bi-chevron-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu-custom">
                        @foreach($productCat as $category)
                        <li><a href="">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product*') ? 'active' : '' }}" href="{{route('web-product')}}">Produk</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('project*') ? 'active' : '' }}" href="{{ route('web-project') }}">Project</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('web-about')}}">Tentang Kami</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{ route('web-contact') }}">Hubungi Kami</a>
                </li>
            </ul>

            <a href="https://wa.me/6282255444203" class="btn btn-contact">Hubungi Kami!</a>
        </div>
    </div>
</nav>
