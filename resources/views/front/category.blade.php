@extends('layouts.layout')



@section('content')



<main id="main-container" class="main-container m-t-30">

        <div class="container">

            <div class="row flex-column flex-lg-row">

                <div class="col-lg-3 col-xl-3">

                    <!-- menu content -->

                    <div class="header-menu-vertical d-lg-block shadow mb-5">

                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>{{$bar['c']}}</h4>

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

                            <div class="tab-pane show active clearfix" id="sort-grid">

                                <!-- Start Single Default Product -->

                                @foreach($product as $p)

                                <div class="product__box product__box--default product__box--border-hover text-center float-left float-4">

                                    <div class="product__img-box">

                                        <a href="{{url('/single/'.$p->id)}}" class="product__img--link">

                                            <img class="product__img" src="{{URL::to($p->img1)}}" alt="">

                                        </a>

                                    </div>

                                    <div class="product__price m-t-10">

                                        <span class="product__price-reg">$ {{$p->price_usd}}</span>

                                        <span class="product__sum">{{$p->price_sum}} sum</span>

                                    </div>

                                    <a href="single-1.html" class="product__link product__link--underline product__link--weight-light m-t-15">

                                        {{$p->$name}}

                                    </a>

                                    <a href="{{url('/single/'.$p->id)}}" class="btn btn-primary btn-block py-2">

                                        {{$batafsil}}

                                       </a>



                                       <a class="hide__num" href="tel:+998334258888"> <i class="fa fa-phone-alt"></i> +998334258888 </a>

                                </div>

                                @endforeach 

                                <!-- End Single Default Product -->

                                

                            </div>

                            

                        </div>

                    </div>



                    <div class="page-pagination">

                        <span></span>

                        {{$product->links()}}

                    </div>

          

            



                 

                </div>

             



                

                

            </div>





          



            

        </div>

    </main> 



@endsection