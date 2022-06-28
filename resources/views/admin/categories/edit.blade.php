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
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('categories.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('categories.update', $category[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong>Nomi Uz :</strong>
                        <input type="text" name="name_uz" value="{{$category[0]->name_uz}}" class="form-control"> <br>

                        <strong>Nomi Rus :</strong>
                        <input type="text" name="name_ru" value="{{$category[0]->name_ru}}" class="form-control"> <br>

                        <strong>Nomi Eng :</strong>
                        <input type="text" name="name_en" value="{{$category[0]->name_en}}" class="form-control"> <br>

                         <strong>Rasm : </strong> <br>
                         <img src="{{URL::to($category[0]->img)}}" width="100px">
                        <input type="file" name="img" value="{{$category[0]->img}}">
                        

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->
@endsection
