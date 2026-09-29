<!-- CTA Banner Section -->
<section id="cta-banner" class="relative py-16 lg:py-24 bg-slate-900 overflow-hidden">
    <!-- Background Image dengan Gradient Overlay Modern -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('assets/web/img/banner.webp') }}" 
             alt="KSP Precast Banner" 
             class="w-full h-full object-cover object-center scale-105 transition-transform duration-700 ease-out">
        
        <!-- Overlay Dark Gradient (Memberikan kontras tinggi agar teks terbaca jelas) -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/95 via-blue-900/90 to-slate-950/95"></div>
        <div class="absolute inset-0 bg-blue-600/10 mix-blend-overlay"></div>
    </div>

    <!-- Elemen Dekoratif Glow / Ambient Light -->
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-blue-500/25 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-indigo-500/25 rounded-full blur-[120px] pointer-events-none"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        
        <!-- Badge Aksen Glassmorphism -->
        <div class="inline-flex items-center space-x-2.5 px-4 py-1.5 rounded-full bg-white/10 border border-white/15 text-blue-100 text-xs sm:text-sm font-medium mb-6 backdrop-blur-md shadow-inner">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-400"></span>
            </span>
            <span>Solusi Beton Pracetak Terpercaya</span>
        </div>

        <!-- Judul Banner -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight mb-5 leading-[1.15]">
            Sedang Mencari Produk Precast <br class="hidden sm:inline" /> untuk Proyek Anda?
        </h2>

        <!-- Deskripsi -->
        <p class="text-base sm:text-lg md:text-xl text-blue-100/80 mb-10 max-w-2xl mx-auto font-normal leading-relaxed">
            Kirim ukuran, volume, dan lokasi proyek. Tim <span class="text-white font-semibold">KSP Precast</span> siap membantu menghitung estmasi kebutuhan Anda secara tepat.
        </p>

        <!-- Tombol CTA dengan Effect & Icon WA -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://wa.me/{{ $contacts?->phone }}?text=Halo%20KSP%20Precast!%20Saya%20ingin%20diskusi%20tentang%20kebutuhan%20produk%20pracetak" 
               target="_blank" 
               class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-bold rounded-xl text-slate-900 bg-white hover:bg-blue-50 active:scale-[0.98] shadow-xl shadow-blue-950/50 hover:shadow-2xl hover:shadow-blue-500/25 hover:-translate-y-0.5 transition-all duration-200 group">
                
                <x-heroicon-o-chat-bubble-left-right class="w-5 h-5 mr-2.5 text-blue-600 transition-transform group-hover:scale-110" />

                <span>Konsultasi Sekarang</span>
            </a>
        </div>
    </div>
</section>