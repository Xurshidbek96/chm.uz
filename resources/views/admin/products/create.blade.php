@extends('admin.layouts.layout')

@section('css')
    <link rel="stylesheet" href="/admin/assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/admin/assets/bundles/jquery-selectric/selectric.css">
@endsection

@section('products')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Add Product</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('name_uz') is-invalid
                  @enderror" name="name_uz" value="{{ old('name_uz') }}">
                   @error('name_uz') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('name_en') is-invalid
                  @enderror" name="name_en" value="{{ old('name_en') }}">
                   @error('name_en') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

                {{-- <div class="form-group row mb-4">
                      <div class="control-label col-form-label text-md-right col-12 col-md-3 col-lg-3">Special</div>
                      <label class="custom-switch mt-2">
                        <input type="checkbox" name="special" value="1" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                      </label>
                </div> --}}


              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Katgoriyasi</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="category_id">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name_uz }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('product_uz') is-invalid
                  @enderror" name="product_uz" value="{{ old('product_uz') }}">
                   @error('product_uz') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('product_en') is-invalid
                  @enderror" name="product_en" value="{{ old('product_en') }}">
                   @error('product_en') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price UZS</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('price_uzs') is-invalid
                  @enderror" name="price_uzs" value="{{ old('price_uzs') }}">
                   @error('price_uzs') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price USD</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('price_usd') is-invalid
                  @enderror" name="price_usd" value="{{ old('price_usd') }}">
                   @error('price_usd') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('title_uz') is-invalid
                  @enderror" name="title_uz" value="{{ old('title_uz') }}">
                   @error('title_uz') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('title_en') is-invalid
                  @enderror" name="title_en" value="{{ old('title_en') }}">
                   @error('title_en') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description UZ</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="form-control @error('description_uz') is-invalid
                  @enderror" name="description_uz" value="{{ old('description_uz') }}"></textarea>
                  @error('description_uz') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description En</label>
                <div class="col-sm-12 col-md-7">
                    <textarea class="form-control @error('description_en') is-invalid
                    @enderror" name="description_en" value="{{ old('description_en') }}"></textarea>
                  @error('description_en') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images 1</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasmni tanlang</label>
                    <input type="file" name="img1" id="image-upload" />
                  </div>
                  @error('img1') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images 2</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasmni tanlang</label>
                    <input type="file" name="img2" id="image-upload" />
                  </div>
                  @error('img2') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images 3</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasmni tanlang</label>
                    <input type="file" name="img3" id="image-upload" />
                  </div>
                  @error('img3') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images 4</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasmni tanlang</label>
                    <input type="file" name="img4" id="image-upload" />
                  </div>
                  @error('img4') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images 5</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasmni tanlang</label>
                    <input type="file" name="img5" id="image-upload" />
                  </div>
                  @error('img5') <div class="indvalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection

@section('js')
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    {{--
    <script>
        $('ckeditor').ckeditor();
    </script> --}}

    <script>
        CKEDITOR.replace('description_uz', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('description_en', {
        filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        });
    </script>
    <script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
@endsection

