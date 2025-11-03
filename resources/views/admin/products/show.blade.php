<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Detail - Admin</title>

  <!-- Favicons -->
  <link href="{{asset('assets/admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
</head>

<body>

@include('admin.components.header')
@include('admin.components.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Product Detail</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
          <li class="breadcrumb-item active">{{ $product->name }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body pt-3">

                <!-- Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#product-info">Info</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-seo">SEO</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-media">Media</button>
                    </li>
                </ul>
                <!-- End Tabs -->

                <div class="tab-content pt-2">

                    <!-- ================= INFO TAB ================= -->
                    <div class="tab-pane fade show active" id="product-info">
                        <h5 class="card-title">Product Information</h5>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>Product Name</strong>
                                <p>{{ $product->name }}</p>
                            </div>

                            <div class="col-md-4">
                                <strong>Category</strong>
                                <p>{{ $product->category->name ?? '-' }}</p>
                            </div>

                            <div class="col-md-4">
                                <strong>Slug</strong>
                                <p>{{ $product->slug }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <strong>Description</strong>
                                <div class="border rounded p-2 bg-light"
                                    style="
                                        max-height: 250px;
                                        overflow-y: auto;
                                        scrollbar-width: none; /* Firefox */
                                        -ms-overflow-style: none; /* IE & Edge */
                                    "
                                >
                                    {!! $product->description !!}
                                </div>
                            </div>
                        </div>

                        {{-- Product Variants --}}
                        <div class="row mb-3">
                            <div class="col">
                                <strong>Variants</strong>

                                @if($product->variants && $product->variants->count() > 0)
                                <div class="table-responsive mt-2">
                                    <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                        <th style="width: 10%">#</th>
                                        <th>Variant Name</th>
                                        <th>Price (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product->variants as $index => $variant)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $variant->name }}</td>
                                            <td>Rp {{ number_format($variant->price, 0, ',', '.') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                                @else
                                <p class="text-muted mt-2">No variants available for this product.</p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <!-- End Info Tab -->

                    <!-- ================= SEO TAB ================= -->
                    <div class="tab-pane fade" id="product-seo">
                        <h5 class="card-title">SEO Information</h5>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <strong>Meta Title</strong>
                                <p>{{ $product->meta_title ?? '-' }}</p>
                            </div>
                            <div class="col-md-4">
                                <strong>Meta Keyword</strong>
                                <p>{{ $product->meta_keyword ?? '-' }}</p>
                            </div>
                            <div class="col-md-4">
                                <strong>Meta Description</strong>
                                <p>{{ $product->meta_description ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End SEO Tab -->

                    <!-- ================= MEDIA TAB ================= -->
                    <div class="tab-pane fade" id="product-media">
                        <h5 class="card-title mb-3">Product Media</h5>

                        {{-- Cover Image --}}
                        <div class="mb-4">
                            <h6 class="fw-bold text-primary">Cover Image</h6>
                            @if($product->cover_image)
                                <div class="card shadow-sm mb-3" style="max-width: 300px;">
                                    <img src="{{ asset('storage/' . $product->cover_image) }}"
                                         alt="Cover of {{ $product->name }}"
                                         class="card-img-top rounded"
                                         style="height: 200px; object-fit: cover;">
                                    <div class="card-body py-2 text-center">
                                        <small class="text-muted">Cover Image</small>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted">No cover image uploaded.</p>
                            @endif
                        </div>

                        <hr>

                        {{-- Gallery --}}
                        <h6 class="fw-bold text-primary mt-3">Gallery Images</h6>
                        <div class="row">
                            @forelse($product->images as $img)
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="card h-100 shadow-sm">
                                        <img src="{{ asset('storage/' . $img->image) }}"
                                             alt="{{ $product->name }}"
                                             class="card-img-top rounded"
                                             style="height:200px; object-fit:cover;">
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p class="text-muted">No gallery images available.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <!-- End Media Tab -->

                </div><!-- End Tab Content -->

                <!-- Action Buttons -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Back
                    </a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i> Edit
                    </a>
                </div>

            </div>
        </div>
    </section>
</main>

@include('admin.components.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Vendor JS Files -->
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/admin/js/main.js')}}"></script>

</body>
</html>
