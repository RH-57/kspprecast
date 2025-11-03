<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Product - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link href="{{asset('assets/admin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/ckeditor/ckeditor5.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">
</head>

<body>
@include('admin.components.header')
@include('admin.components.sidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Product</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            {{-- FORM UPDATE PRODUCT --}}
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label class="form-label">Category</label>
                <select name="product_category_id" class="form-select" required>
                  <option value="">-- Select Category --</option>
                  @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('product_category_id', $product->product_category_id) == $cat->id ? 'selected' : '' }}>
                      {{ $cat->name }}
                    </option>
                  @endforeach
                </select>
                @error('product_category_id') <small class="text-danger">{{ $message }}</small> @enderror
              </div>

              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control"
                       value="{{ old('name', $product->name) }}" required>
              </div>

              {{-- VARIANTS --}}
                <div class="mb-3 mt-4">
                    <label class="form-label">Product Variants</label>
                    <div id="variant-list">
                        @foreach ($product->variants as $i => $variant)
                        <div class="row mb-2 variant-item">
                            <div class="col-md-5">
                            <input type="text" name="variants[{{ $i }}][name]" class="form-control"
                                    value="{{ old('variants.'.$i.'.name', $variant->name) }}"
                                    placeholder="Contoh: Besar" required>
                            </div>
                            <div class="col-md-5">
                            <input type="number" name="variants[{{ $i }}][price]" class="form-control"
                                    value="{{ old('variants.'.$i.'.price', $variant->price) }}"
                                    placeholder="Harga (Rp)" required>
                            </div>
                            <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-remove-variant w-100">
                                <i class="bi bi-trash"></i>
                            </button>
                            </div>
                        </div>
                        @endforeach

                        {{-- Kalau belum ada varian sama sekali --}}
                        @if ($product->variants->count() === 0)
                        <div class="row mb-2 variant-item">
                            <div class="col-md-5">
                            <input type="text" name="variants[0][name]" class="form-control"
                                    placeholder="Contoh: Kecil" required>
                            </div>
                            <div class="col-md-5">
                            <input type="number" name="variants[0][price]" class="form-control"
                                    placeholder="Harga (Rp)" required>
                            </div>
                            <div class="col-md-2">
                            <button type="button" class="btn btn-danger btn-remove-variant w-100">
                                <i class="bi bi-trash"></i>
                            </button>
                            </div>
                        </div>
                        @endif
                    </div>

                    <button type="button" id="add-variant" class="btn btn-outline-primary btn-sm mt-2">
                        + Tambah Varian
                    </button>
                </div>


              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" id="editor" class="form-control" rows="4">{{ old('description', $product->description) }}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Cover Image</label>
                <input type="file" name="cover_image" class="form-control" accept="image/*">
                <small class="text-muted">Upload a new cover image (optional).</small>

                {{-- tampilkan cover lama --}}
                @if ($product->cover_image)
                  <div class="mt-3">
                    <p class="mb-1">Current Cover:</p>
                    <img src="{{ asset('storage/' . $product->cover_image) }}" alt="Current Cover"
                         style="max-width:200px; height:150px; object-fit:cover; border-radius:5px; box-shadow:0 2px 5px rgba(0,0,0,0.2);">
                  </div>
                @endif
              </div>

              <div class="mb-3">
                <label for="images" class="form-label">Add New Images</label>
                <input type="file" name="images[]" id="images" class="form-control" multiple accept="image/*">
                <small class="text-muted">You can upload multiple images (jpg, png, max 10MB each).</small>
              </div>

              <h5 class="mt-4">SEO Meta</h5>

              <div class="mb-3">
                <label class="form-label">Meta Title</label>
                <input type="text" name="meta_title" class="form-control"
                       value="{{ old('meta_title', $product->meta_title) }}">
              </div>

              <div class="mb-3">
                <label class="form-label">Meta Description</label>
                <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $product->meta_description) }}</textarea>
              </div>

              <div class="mb-3">
                <label class="form-label">Meta Keyword</label>
                <input type="text" name="meta_keyword" class="form-control"
                       value="{{ old('meta_keyword', $product->meta_keyword) }}">
              </div>

              <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
              </div>
            </form>

            {{-- LIST GAMBAR YANG SUDAH ADA --}}
            <hr>
            <h5 class="mt-4">Existing Images</h5>
            @if($product->images && $product->images->count() > 0)
              <div class="row mt-3">
                @foreach($product->images as $img)
                  <div class="col-md-3 text-center mb-3">
                    <img src="{{ asset('storage/'.$img->image) }}" class="img-thumbnail mb-2" width="200">
                    <form action="{{ route('products.images.delete', $img->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                              onclick="return confirm('Are you sure you want to delete this image?')"
                              class="btn btn-sm btn-danger">
                        <i class="bi bi-trash"></i> Delete
                      </button>
                    </form>
                  </div>
                @endforeach
              </div>
            @else
              <p class="text-muted">No images uploaded yet.</p>
            @endif

          </div>
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
<script src="{{asset('assets/admin/js/main.js')}}"></script>
<script>
let variantIndex = document.querySelectorAll('.variant-item').length;

document.getElementById('add-variant').addEventListener('click', function() {
  const container = document.getElementById('variant-list');
  const row = document.createElement('div');
  row.classList.add('row', 'mb-2', 'variant-item');
  row.innerHTML = `
    <div class="col-md-5">
      <input type="text" name="variants[${variantIndex}][name]" class="form-control"
             placeholder="Contoh: Medium" required>
    </div>
    <div class="col-md-5">
      <input type="number" name="variants[${variantIndex}][price]" class="form-control"
             placeholder="Harga (Rp)" required>
    </div>
    <div class="col-md-2">
      <button type="button" class="btn btn-danger btn-remove-variant w-100">
        <i class="bi bi-trash"></i>
      </button>
    </div>
  `;
  container.appendChild(row);
  variantIndex++;
});

document.addEventListener('click', function(e) {
  if (e.target.closest('.btn-remove-variant')) {
    e.target.closest('.variant-item').remove();
  }
});
</script>


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
