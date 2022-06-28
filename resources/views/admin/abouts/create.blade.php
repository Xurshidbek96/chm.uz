@extends('admin.layouts.layout')

@section('abouts')
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
                        <a class="create__btn" href="{{route('abouts.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('abouts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea">Xush kelibsiz Uz</label>
                        <textarea id="mytextarea" name="welcome_uz"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea1">Xush kelibsiz Ru</label>
                        <textarea id="mytextarea1" name="welcome_ru"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea2">Xush kelibsiz Eng</label>
                        <textarea id="mytextarea2" name="welcome_en"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea3">Kompaniya haqida Uz</label>
                        <textarea id="mytextarea3" name="company_uz"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea4">Kompaniya haqida Ru</label>
                        <textarea id="mytextarea4" name="company_ru"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea5">Kompaniya haqida Eng</label>
                        <textarea id="mytextarea5" name="company_en"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea6">Bizning jamoa Uz</label>
                        <textarea id="mytextarea6" name="team_uz"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea7">Bizning jamoa Ru</label>
                        <textarea id="mytextarea7" name="team_ru"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea8">Bizning jamoa Eng</label>
                        <textarea id="mytextarea8" name="team_en"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea9">Testimonial Uz</label>
                        <textarea id="mytextarea9" name="testimonial_uz"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea10">Testimonial Ru</label>
                        <textarea id="mytextarea10" name="testimonial_ru"></textarea>
                        </div>

                        <div class="col-xs-12 mt-5 col-sm-12 col-md-12 uzb-intput">
                        <label for="mytextarea11">Testimonial Eng</label>
                        <textarea id="mytextarea11" name="testimonial_en"></textarea>
                        </div>


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
    </script>


@endsection
