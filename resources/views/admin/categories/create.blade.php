@extends('admin.layouts.layout')

@section('categories')
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
              <h4>Add category</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Name UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('name_uz') is-invalid
                  @enderror" name="name_uz" value="{{ old('name_uz') }}">
                   @error('name_uz') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Name En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control @error('name_en') is-invalid
                  @enderror" name="name_en" value="{{ old('name_en') }}">
                   @error('name_en') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choice Image</label>
                    <input type="file" name="img" id="image-upload" />
                  </div>
                  @error('img') <div class="indvalid-feedback">{{ $message }}</div> @enderror
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

