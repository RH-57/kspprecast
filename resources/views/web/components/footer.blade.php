<footer class="footer mt-5">

    <div class="footer-content text-white">
        <div class="container py-5">
            <div class="row gy-4">
                {{-- Kolom 1: Profil Perusahaan --}}
                <div class="col-md-4">
                    <h3 class="fw-bold mb-3"><span>KSP</span>Precast</h3>
                    <p>
                        KSPPrecast adalah mitra terpercaya Anda dalam solusi beton pracetak. Kami menyediakan produk berkualitas tinggi yang menjamin kecepatan, efisiensi, dan kekuatan struktural pada setiap proyek pembangunan Anda.
                    </p>
                    <h6 class="mt-4">Ikuti Sosial Media Kami</h6>
                    <div class="d-flex gap-3 mt-2">
                        @foreach($medsos as $media)
                        <a href="{{$media->url}}" aria-label="Kunjungi Media Sosial Kami" class="social-link"><i class="bi {{$media->icon}}"></i></a>
                        @endforeach
                    </div>
                </div>

                {{-- Kolom 2: Tautan Produk & Solusi --}}
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Produk & Solusi</h5>
                    <ul class="list-unstyled">
                        @foreach($productCat as $category)
                        <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{-- Kolom 3: Kontak Kami --}}
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Kontak Kami</h5>
                    <p class="mb-1"><i class="bi bi-geo-alt"></i> {{$contacts->address}}</p>
                    <p class="mb-1"><i class="bi bi-telephone"></i> +{{$contacts->phone}}</p>
                    <p><i class="bi bi-envelope"></i> {{$contacts->email}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom text-center py-3">
        <p class="mb-0 text-white-50">© 2025 <a href="">PT. Karya Solusi Pracetak</a>. All rights reserved. Made by <a href="https://liradigi.id" target="_blank">LiraDigi.</a></p>
    </div>

</footer>
