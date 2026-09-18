<header x-data="{ open: false }" class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img class="h-10 sm:h-12 w-auto" src="{{ asset('assets/web/img/logo.png') }}" alt="KSP Precast">
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <nav class="hidden md:flex items-center space-x-6 lg:space-x-8">
                {{-- Beranda --}}
                <a href="{{ route('web-home') }}" 
                   class="text-sm font-medium transition-colors duration-200 {{ Request::is('/') ? 'text-blue-600 font-semibold underline underline-offset-8 decoration-2' : 'text-gray-700 hover:text-blue-600' }}">
                    Beranda
                </a>

                {{-- Produk --}}
                <div class="relative group">
                    <a href="{{ route('web-product') }}" 
                       class="inline-flex items-center text-sm font-medium transition-colors duration-200 {{ Request::is('product*') ? 'text-blue-600 font-semibold underline underline-offset-8 decoration-2' : 'text-gray-700 hover:text-blue-600' }}">
                        Produk
                        <x-heroicon-o-chevron-down class="ml-1 w-4 h-4 text-gray-500 group-hover:text-blue-600 transition-transform group-hover:rotate-180" />
                    </a>
                </div>

                {{-- Project --}}
                <a href="{{ route('web-project') }}" 
                   class="text-sm font-medium transition-colors duration-200 {{ Request::is('project*') ? 'text-blue-600 font-semibold underline underline-offset-8 decoration-2' : 'text-gray-700 hover:text-blue-600' }}">
                    Project
                </a>

                {{-- Tentang Kami --}}
                <a href="{{ route('web-about') }}" 
                   class="text-sm font-medium transition-colors duration-200 {{ Request::is('about-us') ? 'text-blue-600 font-semibold underline underline-offset-8 decoration-2' : 'text-gray-700 hover:text-blue-600' }}">
                    Tentang Kami
                </a>

                {{-- Hubungi Kami --}}
                <a href="{{ route('web-contact') }}" 
                   class="text-sm font-medium transition-colors duration-200 {{ Request::is('contact-us') ? 'text-blue-600 font-semibold underline underline-offset-8 decoration-2' : 'text-gray-700 hover:text-blue-600' }}">
                    Hubungi Kami
                </a>
            </nav>

            <!-- Right Side Action (Search Icon & CTA Button) -->
            <div class="hidden md:flex items-center space-x-4">
                {{-- Search Icon Button --}}
                <button type="button" class="p-2 text-gray-600 hover:text-blue-600 hover:bg-gray-100 rounded-full transition-colors">
                    <x-heroicon-o-magnifying-glass class="w-5 h-5" />
                </button>

                {{-- CTA Button --}}
                <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
                   target="_blank" 
                   class="inline-flex items-center px-4 py-2.5 border border-transparent text-sm font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-sm transition-all duration-200">
                    Minta Penawaran
                </a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex items-center md:hidden">
                <button @click="open = !open" 
                        type="button" 
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 focus:outline-none">
                    <!-- Icon Bar (Open) -->
                    <x-heroicon-o-bars-3 x-show="!open" class="h-6 w-6" />
                    <!-- Icon X (Close) -->
                    <x-heroicon-o-x-mark x-show="open" x-cloak class="h-6 w-6" />
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="open" 
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden bg-white border-b border-gray-200">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="{{ route('web-home') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('/') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                Beranda
            </a>
            <a href="{{ route('web-product') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('product*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                Produk
            </a>
            <a href="{{ route('web-project') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('project*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                Project
            </a>
            <a href="{{ route('web-about') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('about-us') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                Tentang Kami
            </a>
            <a href="{{ route('web-contact') }}" 
               class="block px-3 py-2 rounded-md text-base font-medium {{ Request::is('contact-us') ? 'bg-blue-50 text-blue-600 font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
                Hubungi Kami
            </a>

            <div class="pt-4 border-t border-gray-100">
                <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak"
                   target="_blank" 
                   class="w-full text-center block px-4 py-2.5 text-base font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 shadow-sm">
                    Minta Penawaran
                </a>
            </div>
        </div>
    </div>
</header>