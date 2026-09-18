<!-- CTA Banner Section -->
<section id="cta-banner" class="relative py-12 lg:py-16 bg-blue-900 overflow-hidden">
    <!-- Background Image dengan Overlay Biru Gradasi -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/web/img/banner.webp') }}" 
             alt="KSP Precast Banner" 
             class="w-full h-full object-cover object-center">
        
        <!-- Overlay Biru Tua dengan Gradasi ke Hitam -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 to-blue-550/80"></div>
    </div>

    <!-- Aksis / Elemen Dekoratif Biru Terang -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl pointer-events-none"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <!-- Badge Aksen -->
        <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-100 text-xs sm:text-sm font-semibold mb-4 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
            <span>Solusi Beton Pracetak Terpercaya</span>
        </div>

        <!-- Judul Banner -->
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold tracking-tight mb-4 leading-tight">
            Sedang Mencari Produk Precast untuk Proyek Anda?
        </h2>

        <!-- Deskripsi -->
        <p class="text-sm sm:text-base md:text-lg text-blue-100/90 mb-8 max-w-2xl mx-auto font-normal leading-relaxed">
            Kirim ukuran, volume dan lokasi proyek. Tim KSP Precast akan membantu menghitung kebutuhannya.
        </p>

        <!-- Tombol CTA dengan Aksen Biru -->
        <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak" 
           target="_blank" 
           class="inline-flex items-center justify-center px-7 py-3.5 text-sm sm:text-base font-bold rounded-xl text-blue-950 bg-white hover:bg-blue-50 active:bg-blue-100 shadow-lg hover:shadow-blue-500/20 hover:-translate-y-0.5 transition-all duration-200 ease-in-out group">
            
            <x-heroicon-o-chat-bubble-left-right class="w-5 h-5 mr-2 text-blue-600 transition-transform group-hover:scale-110" />

            <span>Konsultasi Sekarang</span>
        </a>
    </div>
</section>