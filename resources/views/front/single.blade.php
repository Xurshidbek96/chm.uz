@extends('layouts.layout')



@section('content')



<!-- ::::::  Start  Breadcrumb Section  ::::::  -->

    <div class="bg-light p-4">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <ul class="d-flex">

                        <li class=""><a href="{{url('/')}}">{{$site['s1']}}</a> > </li>

                        <li class="page-breadcrumb__nav active pl-2"> {{$site['s2']}}</li>

                    </ul>

                </div>

            </div>

        </div>

    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->



    <main id="main-container" class="main-container bg-white py-4">

        @if ($message = Session::get('success'))

                <div class="alert alert-success">

                    <p>{{ $message }}</p>

                </div>

            @endif

        <div class="container">

            <div class="row">

                <!-- Start Product Details Gallery -->

                <div class="col-12">

                    <div class="product-details">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="product-gallery-box m-b-60">

                                    <div class="product-image--large overflow-hidden">

                                        <img class="img-fluid" id="img-zoom" src="{{URL::to($product[0]->img1)}}"

                                            data-zoom-image="{{URL::to($product[0]->img1)}}" alt="">

                                    </div>

                                    <div class="pos-relative m-t-30">

                                        <div id="gallery-zoom"

                                            class="product-image--thumb product-image--thumb-horizontal overflow-hidden swiper-outside-arrow-hover m-lr-30 swiper-container-initialized swiper-container-horizontal">

                                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                                                <div class="swiper-slide swiper-slide-visible swiper-slide-active"

                                                    style="width: 112.5px; margin-right: 10px;">

                                                    <a class="zoom-active" data-image="{{URL::to($product[0]->img1)}}"

                                                        data-zoom-image="{{URL::to($product[0]->img1)}}">

                                                        <img class="img-fluid" src="{{URL::to($product[0]->img1)}}" alt="">

                                                    </a>

                                                </div>

                                                <div class="swiper-slide swiper-slide-visible swiper-slide-next"

                                                    style="width: 112.5px; margin-right: 10px;">

                                                    <a data-image="{{URL::to($product[0]->img2)}}"

                                                        data-zoom-image="{{URL::to($product[0]->img2)}}">

                                                        <img class="img-fluid" src="{{URL::to($product[0]->img2)}}" alt="">

                                                    </a>

                                                </div>

                                                <div class="swiper-slide swiper-slide-visible"

                                                    style="width: 112.5px; margin-right: 10px;">

                                                    <a data-image="{{URL::to($product[0]->img3)}}"

                                                        data-zoom-image="{{URL::to($product[0]->img3)}}">

                                                        <img class="img-fluid" src="{{URL::to($product[0]->img3)}}" alt="">

                                                    </a>

                                                </div>

                                                <div class="swiper-slide swiper-slide-visible"

                                                    style="width: 112.5px; margin-right: 10px;">

                                                    <a data-image="{{URL::to($product[0]->img4)}}"

                                                        data-zoom-image="{{URL::to($product[0]->img4)}}">

                                                        <img class="img-fluid" src="{{URL::to($product[0]->img4)}}" alt="">

                                                    </a>

                                                </div>

                                                <div class="swiper-slide" style="width: 112.5px; margin-right: 10px;">

                                                    <a data-image="{{URL::to($product[0]->img5)}}"

                                                        data-zoom-image="{{URL::to($product[0]->img5)}}">

                                                        <img class="img-fluid" src="{{URL::to($product[0]->img5)}}" alt="">

                                                    </a>

                                                </div>

                                            </div>

                                            <span class="swiper-notification" aria-live="assertive"

                                                aria-atomic="true"></span>

                                        </div>

                                        <div class="swiper-buttons">

                                            <!-- Add Arrows -->

                                            <div class="swiper-button-next gallery__nav gallery__nav--next" tabindex="0"

                                                role="button" aria-label="Next slide" aria-disabled="false"><i

                                                    class="fal fa-chevron-right"></i></div>

                                            <div class="swiper-button-prev gallery__nav gallery__nav--prev swiper-button-disabled"

                                                tabindex="-1" role="button" aria-label="Previous slide"

                                                aria-disabled="true"><i class="fal fa-chevron-left"></i></div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="product-details-box">

                                    <h3 class="section-content__title">{{$product[0]->$name}}

                                    <h6 class="text-primary">{{$site['s3']}}</h6>

                                    <span class="text-reference">{{$site['s4']}}: China machinery import </span> <br>

                                    <span class="text-reference">{{$site['s5']}}: {{$product[0]->model}}</span>



                                    <ul class="my-3">

                                        <li class="text-danger">{{$site['s6']}} </li>

                                        <li class="text-danger">{{$site['s7']}}  </li>

                                    </ul>



                                    <h5 class="podzakaz"><img src="https://www.seekpng.com/png/small/0-4640_image-royalty-free-clipart-check-mark-green-check.png" alt="">{{$site['s8']}} </h5>



                                    <div class="product__price">

                                        <span class="product__price-reg">{{$product[0]->price_usd}} $</span>

                                        <span class="product__price-uzb">{{$product[0]->price_sum}} sum</span>

                                    </div>

                                    <div class="product__desc m-t-25 m-b-30">

                                        <p>{{$product[0]->$title}} </p>

                                    </div>

                                    <div class="product-var p-t-30">





                                        <div class="product-quantity product-var__item">

                                            <span class="product-var__text"></span>

                                            <div class="product-quantity-box">

                                                <div class="quantity">

                                                    <input type="number" min="1" max="9" step="1" value="1">

                                                    <div class="quantity-nav">

                                                        <div class="quantity-button quantity-up"><i

                                                                class="icon-chevron-up"></i></div>

                                                        <div class="quantity-button quantity-down"><i

                                                                class="icon-chevron-down"></i></div>

                                                    </div>

                                                </div>

                                                <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal"

                                                    class="link--gray link--icon-left shop__wishlist-icon ml-4 m-b-5 btn btn-primary text-white p-3 btn-zakaz"><i

                                                        class="fas fa-shopping-bag"></i>{{$site['s9']}}</a>

                                            </div>



                                        </div>

                                    </div>





                                </div>

                            </div>

                        </div>

                    </div>

                </div><!-- End Product Details Gallery -->



                <!-- Start Product Details Tab -->

                <div class="col-12">

                    <div class="product product--1 border-around product-details-tab-area">

                        <div class="row">

                            <div class="col-12">

                                <div class="section-content--border">

                                    <ul

                                        class="tablist tablist--style-black tablist--style-title tablist--style-gap-70 nav d-flex justify-content-between">

                                        <li><a class="nav-link active" data-toggle="tab"

                                                href="#product-desc">{{$site['s10']}}</a></li>

                                        <li><a class="nav-link" data-toggle="tab" href="#product-dis">{{$site['s11']}}</a></li>

                                        <li><a class="nav-link" data-toggle="tab" href="#product-dos">{{$site['s12']}}								</a></li>

                                        <li><a class="nav-link" data-toggle="tab" href="#product-vid">{{$site['s13']}}</a></li>

                                        <li><a class="nav-link" data-toggle="tab" href="#product-pay">{{$site['s14']}}</a></li>

                                        <li><a class="nav-link" data-toggle="tab" href="#product-grant">{{$site['s15']}}</a></li>





                                    </ul>

                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="product-details-tab-box m-t-50">

                                    <div class="tab-content">

                                        <!-- Start Tab - Product Description -->

                                        <div class="tab-pane show active" id="product-desc">

                                            <div class="para__content gray-bg rounded p-3 mb-3">

                                                {!!$product[0]->$parameter!!}

                                            </div>



                                            <div class="para__content gray-bg rounded p-3">

                                                <h4>{{$site['s16']}}

                                                </h4>

                                                <ul class="para__list">

                                                  {!!$product[0]->$info!!}

                                            </div>

                                        </div> <!-- End Tab - Product Description -->



                                        <!-- Start Tab - Product Details -->

                                        <div class="tab-pane" id="product-dis">

                                            <div class="product-dis__content gray-bg rounded p-3">

                                               {!!$product[0]->$description!!}

                                            </div>

                                        </div> <!-- End Tab - Product Details -->

                                        <!-- Start Tab - Product Details -->

                                        <div class="tab-pane" id="product-dos">

                                            <div class="product-dis__content gray-bg rounded p-3">

                                                {!!$product[0]->$delivery!!}

                                            </div>

                                        </div> <!-- End Tab - Product Details -->



                                        <div class="tab-pane" id="product-vid">

                                            <div class="product-dis__content">

                                               <div class="row">

                                                   <div class="col-md-4">

                                                    {{$product[0]->video1}}

                                                   </div>

                                                   <div class="col-md-4">

                                                    {{$product[0]->video2}}

                                                   </div>

                                                   <div class="col-md-4">

                                                    {{$product[0]->video3}}

                                                   </div>

                                               </div>

                                            </div>

                                        </div> <!-- End Tab - Product Details -->



                                        <div class="tab-pane" id="product-pay">

                                    <div class="product-dis__content gray-bg rounded p-3">

                                            {!!$product[0]->$payment!!}

                                    </div>

                                        </div>



                                        <div class="tab-pane" id="product-grant">

                                            <div class="product-dis__content gray-bg rounded p-3">

                                                   {!!$product[0]->$warranty!!}

                                            </div>

                                                </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> <!-- End Product Details Tab -->



                <div class="col-12">

                        <div class="row">

                            <div class="col-12">

                                <div class="swiper-outside-arrow-fix pos-relative">

                                    <div

                                        class="product-default-slider-5grid overflow-hidden m-t-50 swiper-container-initialized swiper-container-horizontal">

                                        <div class="swiper-wrapper"

                                            style="transform: translate3d(-1125px, 0px, 0px); transition-duration: 0ms;">

                                        <!-- Start Single Default Product -->

                                        @foreach ($pr as $p)

                                        <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">

                                            <div class="product__img-box">

                                                <a href="{{url('/single/'.$p->id)}}" class="product__img--link">

                                                    <img class="product__img" src="{{URL::to($p->img1)}}" alt="">

                                                </a>



                                               

                                              

                                          

                                            </div>

                                            <div class="product__price m-t-10">

                                                <span class="product__price-reg">$ {{$p->price_usd}}</span>

                                                <span class="price__uzb">{{$p->price_sum}} sum</span>

                                            </div>

                                            <a href="single-1.html" class="product__link product__link--underline product__link--weight-light m-t-15">

                                                {{$p->$name}}

                                            </a>

                                            <a href="{{url('/single/'.$p->id)}}" class="btn btn--box btn-primary btn-block py-3 ">{{$site['s17']}}</a>

                                        </div>

                                        @endforeach 



                                          

                                        </div>

                                        <div class="swiper-buttons">

                                            <!-- Add Arrows -->

                                            <div class="swiper-button-next default__nav default__nav--next" tabindex="0"

                                                role="button" aria-label="Next slide" aria-disabled="false"><i

                                                    class="fal fa-chevron-right"></i></div>

                                            <div class="swiper-button-prev default__nav default__nav--prev swiper-button-disabled"

                                                tabindex="-1" role="button" aria-label="Previous slide"

                                                aria-disabled="true"><i class="fal fa-chevron-left"></i></div>

                                        </div>

                                        <span class="swiper-notification" aria-live="assertive"

                                            aria-atomic="true"></span>

                                    </div>



                                </div>

                            </div>

                        </div>

                    </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

                </div>

            </div>

        </div>

    </main>



    <!-- material-scrolltop button -->

    <button class="material-scrolltop" type="button"></button>



    <!-- Start Modal Add cart -->

    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title text-center"></h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    <div class="container-fluid">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="user_info">

                                    <div class="col-sm-12">

                                        <h2>{{$modal['buyurtma']}}</h2>

                                    </div>

                                    <div class="col-sm-12">

                                        <button class="backto__left btn btn-primary text-white"> <i class="fa fa-arrow-alt-left"></i> Qayta so'rov yuborish </button>

                                        <form action="{{route('send_order')}}" method="POST" class="hide__form">

                                            @csrf



                                            <input type="hidden" name="p_name" value="{{$product[0]->$name}}">

                                            <div class="form-group row">

                                                <label for="newName" class="col-md-3 col-form-label">{{$modal['name']}}</label>

                                                <div class="col-md-9">

                                                    <input type="text" class="form-control cus_input" id="" name="name" value="">

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label for="newName" class="col-md-3 col-form-label">{{$modal['phone']}}</label>

                                                <div class="col-md-9">

                                                    <input type="text" class="form-control cus_input" id="" name="phone" value="" placeholder="+998(99) 999 99 99 " >

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label for="newName" class="col-md-3 col-form-label">{{$modal['count']}}</label>

                                                <div class="col-md-9">

                                                    <div class="quantity">

                                                        <input type="number" min="1" max="9" step="1" value="1" name="count">

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group row">

                                                <label for="newName" class="col-md-3 col-form-label"></label>

                                                <div class="col-md-9">

                                                    <input type="submit" value="{{$modal['send']}}" class="form-control cus_input_btn btn-primary modal__change" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">

                                                </div>

                                            </div>

                                        

                                        </form>

    

                                        <div class="show__sent pb-5">

                                           <h1 class="text-center"> Sizning so'rovingiz yuborildi</h1>

                                        </div>

    

    

                                    </div>

                                </div>  

                            </div>

                          

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div> <!-- End Modal Add cart -->



@endsection