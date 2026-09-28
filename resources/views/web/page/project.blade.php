<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Proyek Konstruksi Beton Pracetak - KSP Precast</title>

    {{-- ✅ SEO Meta Tags --}}
    <meta name="description" content="Lihat portofolio proyek KSP Precast. Kami telah menyelesaikan berbagai proyek konstruksi menggunakan beton pracetak berkualitas tinggi untuk infrastruktur dan gedung di seluruh Indonesia.">
    <meta name="keywords" content="proyek KSP Precast, beton pracetak, portofolio konstruksi, proyek infrastruktur, precast concrete, panel beton, konstruksi Indonesia">
    <meta name="author" content="KSP Precast">
    <meta name="robots" content="index, follow">

    {{-- ✅ Open Graph (Facebook, WhatsApp, LinkedIn) --}}
    <meta property="og:title" content="Proyek Kami - KSP Precast | Portofolio Konstruksi Beton Pracetak">
    <meta property="og:description" content="Berbagai proyek beton pracetak yang telah kami selesaikan dengan mutu dan presisi tinggi. Lihat portofolio lengkap kami.">
    <meta property="og:image" content="{{ asset('assets/web/img/og-precast.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="KSP Precast">

    {{-- ✅ Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Proyek Kami - KSP Precast">
    <meta name="twitter:description" content="Lihat portofolio proyek beton pracetak unggulan dari KSP Precast di seluruh Indonesia.">
    <meta name="twitter:image" content="{{ asset('assets/web/img/og-precast.webp') }}">

    {{-- ✅ Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ✅ Favicon --}}
    <link rel="icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/png">

    {{-- AOS & Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Alpine.js & Tailwind Build --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 antialiased font-sans">

    @include('web.components.header')

    {{-- Hero Section --}}
    <section class="relative bg-slate-900 text-white pt-28 pb-16 md:pt-36 md:pb-24 overflow-hidden">
        {{-- Background Image Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/web/img/banner.webp') }}" alt="KSP Precast Banner" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
            <span class="inline-flex items-center gap-1.5 py-1 px-3 rounded-full text-xs font-semibold bg-sky-500/10 text-sky-400 border border-sky-500/20 mb-4">
                <i class="bi bi-building"></i> Portofolio KSP Precast
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight text-white mb-4">
                Proyek Konstruksi Kami
            </h1>
            <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-300">
                Bukti nyata dedikasi dan kualitas beton pracetak KSP Precast dalam mendukung berbagai pembangunan infrastruktur dan fasilitas di Indonesia.
            </p>
        </div>
    </section>

    {{-- Grid Portofolio Proyek --}}
    <section class="py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Section Title & Filter Summary --}}
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 pb-4 border-b border-slate-200" data-aos="fade-up">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">
                        Rekam Jejak Pembangunan
                    </h2>
                    <p class="text-slate-600 mt-1 text-sm sm:text-base">
                        Menampilkan seluruh proyek pracetak yang telah sukses diselesaikan.
                    </p>
                </div>
                <div class="mt-4 md:mt-0 text-sm text-slate-500 font-medium">
                    Total Proyek: <span class="text-sky-600 font-bold">{{ count($projects) }}</span>
                </div>
            </div>

            {{-- Cards Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-2xl shadow-sm border border-slate-200/80 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full"
                         data-aos="fade-up" 
                         data-aos-delay="{{ ($loop->iteration % 3) * 100 }}">
                        
                        {{-- Image Wrapper --}}
                        <div class="relative overflow-hidden aspect-[16/10] bg-slate-100">
                            <img src="{{ asset('storage/' . $project->cover_image) }}" 
                                 alt="{{ $project->name }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out">
                            
                            {{-- Badge Overlay --}}
                            <div class="absolute top-3 left-3 flex flex-wrap gap-2">
                                @if(!empty($project->category))
                                    <span class="bg-slate-900/80 backdrop-blur-md text-white text-xs font-semibold px-2.5 py-1 rounded-lg">
                                        {{ $project->category }}
                                    </span>
                                @endif
                                <span class="bg-sky-600 text-white text-xs font-semibold px-2.5 py-1 rounded-lg shadow-sm">
                                    <i class="bi bi-calendar-event me-1"></i>{{ $project->year }}
                                </span>
                            </div>
                        </div>

                        {{-- Card Body --}}
                        <div class="p-5 sm:p-6 flex flex-col flex-grow justify-between">
                            <div>
                                {{-- Lokasi --}}
                                <div class="flex items-center text-xs font-medium text-slate-500 mb-2">
                                    <i class="bi bi-geo-alt-fill text-sky-500 me-1"></i>
                                    <span>{{ $project->location }}</span>
                                </div>

                                {{-- Judul Proyek --}}
                                <h3 class="font-bold text-lg text-slate-900 group-hover:text-sky-600 transition-colors line-clamp-2 mb-2">
                                    {{ $project->name }}
                                </h3>

                                {{-- Deskripsi Ringkas (jika ada) --}}
                                @if(!empty($project->description))
                                    <p class="text-slate-600 text-sm line-clamp-2 mb-4">
                                        {{ $project->description }}
                                    </p>
                                @endif
                            </div>

                            {{-- Tombol Detail --}}
                            <div class="pt-4 border-t border-slate-100 mt-4">
                                <a href="{{ route('web-project-detail', $project->slug) }}" 
                                   class="inline-flex items-center justify-center w-full px-4 py-2.5 bg-slate-100 hover:bg-sky-600 text-slate-700 hover:text-white rounded-xl text-sm font-semibold transition-all duration-200 group/btn">
                                    <span>Lihat Detail Proyek</span>
                                    <i class="bi bi-arrow-right ms-2 transition-transform group-hover/btn:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    @include('web.components.whatsapp')
    @include('web.components.footer')

    <script src="{{ asset('build/assets/app-Bui8vA5R.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ 
            duration: 800, 
            once: true 
        });
    </script>
</body>
</html>