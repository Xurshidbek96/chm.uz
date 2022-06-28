@extends('admin.layouts.layout')

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
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('products.index')}}"> <i class='bx bx-arrow-back'></i>Back</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('products.update', $product[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong>Nomi Uz :</strong>
                        <input type="text" name="name_uz" class="form-control" value="{{$product[0]->name_uz}}"> <br>

                        <strong>Nomi Ru :</strong>
                        <input type="text" name="name_ru" class="form-control" value="{{$product[0]->name_ru}}"> <br>

                        <strong>Nomi Eng :</strong>
                        <input type="text" name="name_en" class="form-control" value="{{$product[0]->name_en}}"> <br>

                        <strong> Kategoriyasi :</strong>

                        <select name="category" class="form-control">
                            <option value="{{$product[0]->category}}">{{$product[0]->category}}</option>
                            @foreach($category as $c)
                            <option value="{{$c->id}}">{{$c->id}}. {{$c->name_uz}}</option>
                            @endforeach
                        </select> <br>

                        <strong>Product :</strong>
                        <input type="text" name="product" class="form-control" value="{{$product[0]->product}}"> <br>

                        <strong>Model :</strong>
                        <input type="text" name="model" class="form-control" value="{{$product[0]->model}}"> <br>

                        <strong>Narxi So'mda :</strong>
                        <input type="text" name="price_sum" class="form-control" value="{{$product[0]->price_sum}}"> <br>

                        <strong>Narxi $ USD :</strong>
                        <input type="text" name="price_usd" class="form-control" value="{{$product[0]->price_usd}}"> <br>

                        <strong>Qisqa ma'lumot Uz :</strong>
                        <input type="text" name="title_uz" class="form-control" value="{{$product[0]->title_uz}}"> <br>

                        <strong>Qisqa ma'lumot Ru :</strong>
                        <input type="text" name="title_ru" class="form-control" value="{{$product[0]->title_ru}}"> <br>

                        <strong>Qisqa ma'lumot Eng :</strong>
                        <input type="text" name="title_en" class="form-control" value="{{$product[0]->title_en}}"> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea"><b>Parametr UZ</b></label>
                        <textarea id="mytextarea" name="parameter_uz" value="{{ $product[0]->parameter_uz }}">{{ old('parameter_uz') ? old('parameter_uz') : $product[0]->parameter_uz }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea1"><b>Parametr Ru</b></label>
                        <textarea id="mytextarea1" name="parameter_ru">{{ old('parameter_ru') ? old('parameter_ru') : $product[0]->parameter_ru }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea13"><b>Parametr Eng</b></label>
                        <textarea id="mytextarea13" name="parameter_en">{{ old('parameter_en') ? old('parameter_en') : $product[0]->parameter_en }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea2"><b>Qo'shimcha ma'lumot UZ</b></label>
                        <textarea id="mytextarea2" name="info_uz" value="{{$product[0]->info_uz}}">{{ old('info_uz') ? old('info_uz') : $product[0]->info_uz }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea3"><b>Qo'shimcha ma'lumot Ru</b></label>
                        <textarea id="mytextarea3" name="info_ru" value="{{$product[0]->info_ru}}">{{ old('info_ru') ? old('info_ru') : $product[0]->info_ru }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea14"><b>Qo'shimcha ma'lumot Eng</b></label>
                        <textarea id="mytextarea14" name="info_en" value="{{$product[0]->info_en}}">{{ old('info_en') ? old('info_en') : $product[0]->info_en }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea4"><b>Tavsif UZ</b></label>
                        <textarea id="mytextarea4" name="description_uz" value="{{$product[0]->description_uz}}">{{ old('description_uz') ? old('description_uz') : $product[0]->description_uz }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea5"><b>Tavsif Ru</b></label>
                        <textarea id="mytextarea5" name="description_ru" value="{{$product[0]->description_ru}}">{{ old('description_ru') ? old('description_ru') : $product[0]->description_ru }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea15"><b>Tavsif Eng</b></label>
                        <textarea id="mytextarea15" name="description_en" value="{{$product[0]->description_en}}">{{ old('description_en') ? old('description_en') : $product[0]->description_en }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea6"><b>Yetkazib berish UZ</b></label>
                        <textarea id="mytextarea6" name="delivery_uz" value="{{$product[0]->delivery_uz}}">{{ old('delivery_uz') ? old('delivery_uz') : $product[0]->delivery_uz }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea7"><b>Yetkazib berish Ru</b> </label>
                        <textarea id="mytextarea7" name="delivery_ru" value="{{$product[0]->delivery_ru}}">{{ old('delivery_ru') ? old('delivery_ru') : $product[0]->delivery_ru }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea16"><b>Yetkazib berish Eng</b> </label>
                        <textarea id="mytextarea16" name="delivery_en" value="{{$product[0]->delivery_en}}">{{ old('delivery_en') ? old('delivery_en') : $product[0]->delivery_en }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea8"><b>To'lov UZ</b></label>
                        <textarea id="mytextarea8" name="payment_uz" value="{{$product[0]->payment_uz}}">{{ old('payment_uz') ? old('payment_uz') : $product[0]->payment_uz }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea9"> <b>To'lov Ru</b></label>
                        <textarea id="mytextarea9" name="payment_ru" value="{{$product[0]->payment_ru}}">{{ old('payment_ru') ? old('payment_ru') : $product[0]->payment_ru }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea17"> <b>To'lov Eng</b></label>
                        <textarea id="mytextarea17" name="payment_en" value="{{$product[0]->payment_en}}">{{ old('payment_en') ? old('payment_en') : $product[0]->payment_en }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea10"><b>Kafolat UZ</b></label>
                        <textarea id="mytextarea10" name="warranty_uz" value="{{$product[0]->warranty_uz}}">{{ old('warranty_uz') ? old('warranty_uz') : $product[0]->warranty_uz }}</textarea>
                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea11"><b>Kafolat Ru</b></label>
                        <textarea id="mytextarea11" name="warranty_ru" value="{{$product[0]->warranty_ru}}">{{ old('warranty_ru') ? old('warranty_ru') : $product[0]->warranty_ru }}</textarea>
                        </div> <br> <br> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea18"><b>Kafolat Eng</b></label>
                        <textarea id="mytextarea18" name="warranty_en" value="{{$product[0]->warranty_en}}">{{ old('warranty_en') ? old('warranty_en') : $product[0]->warranty_en }}</textarea>
                        </div> <br> <br> <br>

                        <strong>Video 1 :</strong>
                        <input type="text" name="video1" class="form-control" value="{{$product[0]->video1}}"> <br>
                        <div class="col-md-6">
                            {!!$product[0]->video1!!}
                         </div><br>
                        

                        <strong>Video 2 :</strong>
                        <input type="text" name="video2" class="form-control" value="{{$product[0]->video2}}"> <br>
                        <div class="col-md-6">
                            {!!$product[0]->video2!!}
                         </div><br>
                        

                        <strong>Video 3 :</strong>
                        <input type="text" name="video3" class="form-control" value="{{$product[0]->video3}}"> <br>
                        <div class="col-md-6">
                            {!!$product[0]->video3!!}
                         </div><br>
                        

                        <strong>Rasm 1</strong>
                        <img src="{{URL::to($product[0]->img1)}}" width="100px">
                        <input type="file" name="img1" class="form-control" value="{{$product[0]->img1}}"> <br>

                        <strong>Rasm 2</strong>
                        <img src="{{URL::to($product[0]->img2)}}" width="100px">
                        <input type="file" name="img2" class="form-control" value="{{$product[0]->img2}}"> <br>

                        <strong>Rasm 3</strong>
                        <img src="{{URL::to($product[0]->img3)}}" width="100px">
                        <input type="file" name="img3" class="form-control" value="{{$product[0]->img3}}"> <br>

                        <strong>Rasm 4</strong>
                        <img src="{{URL::to($product[0]->img4)}}" width="100px">
                        <input type="file" name="img4" class="form-control" value="{{$product[0]->img4}}"> <br>

                        <strong>Rasm 5</strong>
                        <img src="{{URL::to($product[0]->img5)}}" width="100px">
                        <input type="file" name="img5" class="form-control" value="{{$product[0]->img5}}"> <br>
                        

                        <input type="submit" value="Submit">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
      tinymce.init({
        selector: '#mytextarea1'
      });
      tinymce.init({
        selector: '#mytextarea2'
      });

      tinymce.init({
        selector: '#mytextarea3'
      });

      tinymce.init({
        selector: '#mytextarea4'
      });
      tinymce.init({
        selector: '#mytextarea5'
      });
      tinymce.init({
        selector: '#mytextarea6'
      });

      tinymce.init({
        selector: '#mytextarea7'
      });
      tinymce.init({
        selector: '#mytextarea8'
      });
      tinymce.init({
        selector: '#mytextarea9'
      });

      tinymce.init({
        selector: '#mytextarea10'
      });
      tinymce.init({
        selector: '#mytextarea11'
      });
      tinymce.init({
        selector: '#mytextarea12'
      });
      tinymce.init({

        selector: '#mytextarea13'

      });

      tinymce.init({

        selector: '#mytextarea14'

      });

      tinymce.init({

        selector: '#mytextarea15'

      });

      tinymce.init({

        selector: '#mytextarea16'

      });

      tinymce.init({

        selector: '#mytextarea17'

      });

      tinymce.init({

        selector: '#mytextarea18'

      });
    </script>
@endsection
