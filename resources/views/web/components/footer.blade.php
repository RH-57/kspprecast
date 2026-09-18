<footer class="bg-slate-900 text-slate-300 border-t border-slate-800">

    {{-- Main Footer Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-6 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            
            {{-- Kolom 1: Profil Perusahaan (Lebih Lebar di Desktop) --}}
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ url('/') }}" class="inline-block">
                    <img src="{{ asset('assets/web/img/logo_footer.png') }}"
                         alt="KSP Precast"
                         class="h-12 sm:h-14 w-auto">
                </a>
                <p class="text-sm text-slate-400 leading-relaxed max-w-md">
                    KSP Precast adalah mitra terpercaya Anda dalam solusi beton pracetak. Kami menyediakan produk berkualitas tinggi yang menjamin kecepatan, efisiensi, dan kekuatan struktural pada setiap proyek pembangunan Anda.
                </p>

                {{-- Sosial Media --}}
                <div class="pt-2">
                    <h6 class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-3">Ikuti Sosial Media Kami</h6>
                    <div class="flex items-center space-x-3">
                        @foreach($medsos as $media)
                            <a href="{{ $media->url }}" 
                               target="_blank"
                               aria-label="Kunjungi Media Sosial Kami" 
                               class="w-9 h-9 rounded-lg bg-slate-800 hover:bg-blue-600 text-slate-400 hover:text-white flex items-center justify-center transition-all duration-200">
                                <i class="bi {{ $media->icon }} text-base"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Kolom 2: Menu Cepat --}}
            <div>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-blue-600 pl-3">
                    Menu Cepat
                </h3>
                <ul class="space-y-2.5 text-sm">
                    <li>
                        <a href="{{ route('web-home') }}" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-200">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web-product') }}" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-200">
                            Produk
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web-about') }}" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-200">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('web-contact') }}" class="hover:text-white hover:translate-x-1 inline-block transition-all duration-200">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Kolom 3: Kontak Kami --}}
            <div>
                <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4 border-l-2 border-blue-600 pl-3">
                    Kontak Kami
                </h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start space-x-3">
                        <x-heroicon-o-map-pin class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" />
                        <span class="text-slate-400 leading-snug">{{ $contacts?->address }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <x-heroicon-o-phone class="w-5 h-5 text-blue-500 flex-shrink-0" />
                        <a href="https://wa.me/{{ $contacts?->phone }}" target="_blank" class="text-slate-400 hover:text-white transition-colors">
                            +{{ $contacts?->phone }}
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <x-heroicon-o-envelope class="w-5 h-5 text-blue-500 flex-shrink-0" />
                        <a href="mailto:{{ $contacts?->email }}" class="text-slate-400 hover:text-white transition-colors">
                            {{ $contacts?->email }}
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    {{-- Bottom Bar / Copyright --}}
    <div class="border-t border-slate-800 bg-slate-950/50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-xs text-slate-500">
            <p>
                © 2026 <a href="{{ url('/') }}" class="text-slate-400 hover:text-white font-medium">PT. Karya Solusi Pracetak</a>. All rights reserved. Made by 
                <a href="https://liradigi.id" target="_blank" class="text-blue-500 hover:underline">LiraDigi</a>.
            </p>
        </div>
    </div>

</footer>