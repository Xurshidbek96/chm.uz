@extends('admin.layouts.layout')



@section('blogs')

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

                        <a class="create__btn" href="{{route('blogs.index')}}"> <i class='bx bx-arrow-back'></i>Back</a>

                        

                    </div>



                    <form class="create__inputs" action="{{route('blogs.update', $blog[0]->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        @method('PUT')



                        <strong>Nomi Uz :</strong>

                        <input type="text" name="name_uz" class="form-control" value="{{$blog[0]->name_uz}}"> <br>



                        <strong>Nomi Ru :</strong>

                        <input type="text" name="name_ru" class="form-control" value="{{$blog[0]->name_ru}}"> <br>

                        <strong>Nomi Eng :</strong>

                        <input type="text" name="name_en" class="form-control" value="{{$blog[0]->name_en}}"> <br>



                        <strong>Ma'lumot Uz :</strong>

                        <input type="text" name="title_uz" class="form-control" value="{{$blog[0]->title_uz}}"> <br>



                        <strong>Ma'lumot Ru :</strong>

                        <input type="text" name="title_ru" class="form-control" value="{{$blog[0]->title_ru}}"> <br>

                        <strong>Ma'lumot Eng :</strong>

                        <input type="text" name="title_en" class="form-control" value="{{$blog[0]->title_en}}"> <br>



                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">

                        <label for="mytextarea"><b>Kontent Uz </b></label>

                        <textarea id="mytextarea" name="info_uz" value="{{$blog[0]->info_uz}}">{{ old('info_uz') ? old('info_uz') : $blog[0]->info_uz }}</textarea>

                        </div> <br>



                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">

                        <label for="mytextarea1"><b>Kontent Ru</b></label>

                        <textarea id="mytextarea1" name="info_ru" value="{{$blog[0]->info_ru}}">{{ old('info_ru') ? old('info_ru') : $blog[0]->info_ru }}</textarea>

                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">

                        <label for="mytextarea1"><b>Kontent Eng</b></label>

                        <textarea id="mytextarea1" name="info_en" value="{{$blog[0]->info_en}}">{{ old('info_en') ? old('info_en') : $blog[0]->info_en }}</textarea>

                        </div> <br>

                         <strong>Rasmi : </strong> <br>

                         <img src="{{URL::to($blog[0]->img)}}" width="100px">

                        <input type="file" name="img" value="{{$blog[0]->img}}">


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

    </script>

@endsection

