@extends('admin.layouts.layout')

@section('banners')
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
                        <h3>Yangi Sile qo'shish</h3>
                        <a class="create__btn" href="{{route('banners.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>
                        
                    </div>

                    <form class="create__inputs" action="{{route('banners.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong>Nomi  :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong>Link  :</strong>
                        <input type="text" name="link" class="form-control"> <br>

                         <strong>Rasmi</strong>
                        <input type="file" name="img" class="form-control">

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>
                
            </div>
        </main>
        <!-- MAIN -->

@endsection
