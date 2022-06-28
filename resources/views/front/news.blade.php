@extends('layouts.layout')



@section('content')



<main id="main-container" class="main-container m-t-30">

        <div class="container">

            <div class="row flex-column flex-lg-row">

                <div class="col-lg-3 col-xl-3">

                    <!-- menu content -->

                    <div class="header-menu-vertical d-lg-block shadow mb-5">

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

                   



                    <div class="product-tab-area">

                        <div class="tab-content ">

                           

                            <div class="">

                                <!-- Start Single List Product -->

                                @foreach($new as $n)

                                <div class="product__box product__box--list rad_10">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <div class="product__img-box">

                                                <a href="{{url('/new/'.$n->id)}}" class="product__img--link">

                                                    <img class="product__img" src="{{URL::to($n->img)}}" alt="">

                                                </a>

                                                

                                            </div>

                                        </div>

                                        <div class="col-md-5 pos-relative">

                                            <div class="border-right pos-absolute"></div>

                                            <div class="product__price">

                                            </div>

                                            <a href="{{url('/new/'.$n->id)}}" class="product__link product__link--underline product__link--weight-light m-t-15">

                                                {{$n->$name}}

                                            </a>

                                            <div class="product__desc m-t-25 m-b-30">

                                                <p>{{$n->$title}}</p>

                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div>

                                                <ul class="shop__list-link">

                                                    <li><a href="{{url('/new/'.$n->id)}}" class="btn btn--block btn--small btn--border-blue btn--uppercase btn--weight m-b-15">{{$batafsil}}</a></li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                @endforeach 

                                <!-- Start Single List Product -->

                             

                            </div>

                        </div>

                    </div>



                    <div class="page-pagination">

                        {{$new->links()}}

                    </div>



                </div>

                

            </div>





          



            

        </div>

    </main> 



@endsection