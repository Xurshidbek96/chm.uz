@extends('admin.layouts.layout')

@section('products')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Show Product</h4>
              <a href="{{ route('products.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Name UZ: </td>
                        <td><b>{{ $product->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Name En: </td>
                        <td><b>{{ $product->name_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Kategoriyasi UZ : </td>
                        <td><b>{{ $product->category->name_uz ?? 'Bog`lanmagan' }}</b></td>
                    </tr>

                    <tr>
                        <td>Product UZ: </td>
                        <td><b>{{ $product->product_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Product En: </td>
                        <td><b>{{ $product->product_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Price UZS: </td>
                        <td><b>{{ $product->price_uzs }}</b></td>
                    </tr>

                    <tr>
                        <td>Price USD: </td>
                        <td><b>{{ $product->price_usd }}</b></td>
                    </tr>

                    <tr>
                        <td>Title UZ: </td>
                        <td><b>{{ $product->title_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Title En: </td>
                        <td><b>{{ $product->title_uz }}</b></td>
                    </tr>


                    <tr>
                        <td>Kategoriyasi Ru : </td>
                        <td><b>{{ $product->category->name_ru }}</b></td>
                    </tr>

                    <tr>
                        <td>Deccription UZ: </td>
                        <td><b>{!! $product->description_uz !!}</b></td>
                    </tr>

                    <tr>
                        <td>Deccription EN: </td>
                        <td><b>{!! $product->description_en !!}</b></td>
                    </tr>


                    @for ($i=1; $i <= 5; $i++)
                        <tr>
                            <td>Image {{ $i }} : </td>
                            <td>
                            <img alt="image" src="/images/{{ $product['img'.$i] }}" width="59">
                            </td>
                        </tr>
                    @endfor


                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
