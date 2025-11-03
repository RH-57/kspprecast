<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/admin/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/admin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/ckeditor/ckeditor5.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('admin.components.header')
<!-- End Header -->

<!-- ======= Sidebar ======= -->
@include('admin.components.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
          <li class="breadcrumb-item active">Create</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Product</h5>

              <!-- Form Start -->
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                    <select name="product_category_id" class="form-select" required>
                        <option value="">-- Select Category --</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('product_category_id') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('product_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Variants</label>
                    <div class="col-sm-10">
                        <div id="variant-list">
                            <div class="row mb-2 variant-item">
                                <div class="col-md-5">
                                    <input type="text" name="variants[0][name]" class="form-control" placeholder="Contoh: Kecil" required>
                                </div>
                                <div class="col-md-5">
                                    <input type="number" name="variants[0][price]" class="form-control" placeholder="Harga (Rp)" required>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger btn-remove-variant w-100">Hapus</button>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="add-variant" class="btn btn-outline-primary btn-sm">+ Tambah Varian</button>
                    </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" id="editor" class="form-control">{{ old('description') }}</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Cover Image</label>
                    <div class="col-sm-4">
                        <input type="file" name="cover_image" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="images" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-10">
                        <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
                        @error('images.*') <small class="text-danger">{{ $message }}</small> @enderror

                        <!-- Preview -->
                        <div class="mt-3 d-flex flex-wrap gap-2" id="preview"></div>
                    </div>
                </div>


                <h5 class="card-title">SEO Meta</h5>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Meta Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Meta Description</label>
                  <div class="col-sm-10">
                    <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description') }}</textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Meta Keyword</label>
                  <div class="col-sm-10">
                    <input type="text" name="meta_keyword" value="{{ old('meta_keyword') }}" class="form-control">
                  </div>
                </div>

                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
              </form><!-- End Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main>

  <!-- ======= Footer ======= -->
  @include('admin.components.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/admin/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/quill/quill.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/admin/vendor/php-email-form/validate.js')}}"></script>

  <script>
    let variantIndex = 1;

    document.getElementById('add-variant').addEventListener('click', function() {
        const container = document.getElementById('variant-list');
        const row = document.createElement('div');
        row.classList.add('row', 'mb-2', 'variant-item');
        row.innerHTML = `
            <div class="col-md-5">
                <input type="text" name="variants[${variantIndex}][name]" class="form-control" placeholder="Contoh: Medium" required>
            </div>
            <div class="col-md-5">
                <input type="number" name="variants[${variantIndex}][price]" class="form-control" placeholder="Harga (Rp)" required>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger btn-remove-variant w-100">Hapus</button>
            </div>
        `;
        container.appendChild(row);
        variantIndex++;
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-remove-variant')) {
            e.target.closest('.variant-item').remove();
        }
    });
    </script>


  <!-- Template Main JS File -->
   <script type="importmap">
    {
        "imports": {
            "ckeditor5": "/assets/admin/vendor/ckeditor/ckeditor5.js",
            "ckeditor5/": "/assets/admin/vendor/ckeditor/"
        }
    }
    </script>

    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font,
            Table,
            TableToolbar,
            Alignment
        } from 'ckeditor5';

        ClassicEditor
            .create(document.querySelector('#editor'), {
                licenseKey: 'GPL',
                plugins: [
                    Essentials,
                    Paragraph,
                    Bold,
                    Italic,
                    Font,
                    Table,
                    TableToolbar,
                    Alignment
                ],
                toolbar: [
                    'undo', 'redo', '|',
                    'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'alignment', '|',
                    'insertTable', 'tableColumn', 'tableRow', 'mergeTableCells'
                ],
                table: {
                    contentToolbar: [
                        'tableColumn', 'tableRow', 'mergeTableCells'
                    ]
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error(error);
            });

    </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
            timer: 2000,
            showConfirmButton: false
        })
    </script>
    @endif

    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
            timer: 3000,
            showConfirmButton: true
        })
    </script>
    @endif


</body>

</html>
