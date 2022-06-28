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

                        <h3>Yaratish</h3>

                        <a class="create__btn" href="{{route('blogs.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                        

                    </div>



                    <form class="create__inputs" action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <strong>Nomi Uz :</strong>

                        <input type="text" name="name_uz" class="form-control"> <br>



                        <strong>Nomi Ru :</strong>

                        <input type="text" name="name_ru" class="form-control"> <br>

                         <strong>Nomi Eng :</strong>

                        <input type="text" name="name_en" class="form-control"> <br>



                        <strong>Ma'lumot Uz :</strong>

                        <input type="text" name="title_uz" class="form-control"> <br>



                        <strong>Ma'lumot Ru :</strong>

                        <input type="text" name="title_ru" class="form-control"> <br>

                        <strong>Ma'lumot Eng :</strong>

                        <input type="text" name="title_en" class="form-control"> <br>



                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">

                        <label for="mytextarea"><b>Kontent Uz </b></label>

                        <textarea id="mytextarea" name="info_uz"></textarea>

                        </div> <br>



                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">

                        <label for="mytextarea1"><b>Kontent Ru</b></label>

                        <textarea id="mytextarea1" name="info_ru"></textarea>

                        </div> <br>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">

                        <label for="mytextarea2"><b>Kontent Eng</b></label>

                        <textarea id="mytextarea2" name="info_en"></textarea>

                        </div> <br>



                         <strong>Rasmi</strong>

                        <input type="file" name="img" class="form-control">



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

