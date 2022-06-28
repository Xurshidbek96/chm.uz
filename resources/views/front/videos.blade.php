@extends('layouts.layout')



@section('content')

   



    <main id="main-container" class="main-container m-t-30">

        <div class="container">

            <div class="row flex-column flex-lg-row">

                <div class="col-lg-3 col-xl-3">

                    <!-- menu content -->

                    <div class="header-menu-vertical d-lg-block shadow md-5">

                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i> {{$bar['c']}}</h4>

                        <ul class="menu-content">                          

                            @foreach($category as $c)
                            <li class="menu-item">
                                <a href="{{url('/category/'.$c->id)}}"> <img src="{{URL::to($c->img)}}" alt=""> <p>{{$c->$name}}
                                </p> </a>
                            </li>
                            @endforeach   

                        </ul>

                        

                    </div>

                    <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->

                   

                </div>



                <div class="col-lg-9 col-xl-9">

                   

                    <div class="container bg-white p-5 rad_10 mb-5">



                        <div class="row">

                            @foreach($product as $p)

                            <div class="col-md-6">

                                {!!$p->video1!!}

                            </div>

                            @endforeach





                            

                        </div>

                    </div>

                </div>   

            </div>

        </div>

    </main> 



@endsection