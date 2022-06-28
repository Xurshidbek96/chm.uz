@extends('admin.layouts.layout')

@section('partners')
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
                        <a class="create__btn" href="{{route('partners.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('partners.update', $partner[0]->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong>Nomi : </strong>
                        <input type="text" name="name" value="{{$partner[0]->name}}" class="form-control"> <br>

                         <strong>Rasm : </strong> <br>
                         <img src="{{URL::to($partner[0]->img)}}" width="100px">
                        <input type="file" name="img" value="{{$partner[0]->img}}">
                        

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->
@endsection
