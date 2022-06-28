@extends('layouts.layout')

@section('content')
<main id="main-container" class="main-container m-t-30">
    @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        <div class="container">
            <div class="row flex-column flex-lg-row">
                <div class="col-lg-3 col-xl-3">
                    <!-- menu content -->
                    <div class="header-menu-vertical d-lg-bloc shadow mb-5">
                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i>{{$bar['c']}}</h4>
                        <ul class="menu-content">
                            @foreach($category as $c)
                            <li class="menu-item">
                                <a href="{{url('/category/'.$c->id)}}"> <img src="{{URL::to($c->img)}}" alt=""> <p>{{$c->$name}}</p> </a>
                            </li>
                            @endforeach   
                        </ul>
                        
                    </div>
                    <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->
                   
                </div>

                <div class="col-lg-9 col-xl-9">
                    <!-- yangi code -->
                   <div class="p-3 bg-blueee mb-3 rounded">
                       <h1 style="text-align: center;">CHINA MACHINERY IMPORT</h1>
                       <!-- yangi code -->
                   </div>
                    <!-- ::::::  Start Hero Section  ::::::  -->
                    <div class="hero hero-slider hero---2 shadow">
                        <div class="swiper-wrapper">
                            @foreach($banner as $b)
                            <a href="{{$b->link}}" class="swiper-slide">
                                <img src="{{URL::to($b->img)}}" alt="">
                            </a>
                            @endforeach
                        </div>

                        <div class="swiper-pagination hero__dots hero__dots--2"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <!-- Add Arrows -->
                            <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i></div>
                            <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i></div>
                        </div>
                        
                        
                        <!-- ::::::  End Hero Section  ::::::  -->
                    </div> <!-- ::::::  ENd Hero Section  ::::::  -->

                    
            <div class="row">
                <div class="col-12">
                    <!-- ::::::  Start CMS Section  ::::::  -->
                    <div class="cms cms--1">
                        <div class="row info__cards">
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="cms__content d-flex align-items-center justify-content-around shadow">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon1.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">{{$info['info1']}}</h6>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="cms__content d-flex align-items-center justify-content-around shadow">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon2.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">{{$info['info2']}}</h6>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="cms__content d-flex align-items-center justify-content-around shadow">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon3.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">{{$info['info3']}}</h6>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                         
                        </div>
                    </div> <!-- ::::::  End CMS Section  ::::::  -->

                </div>
                  
            </div>

            <div class="row">
                @foreach($product3 as $p)
                  <div class="col-md-4  mb-5">
                    <img class="img-fluid rad_10" src="{{URL::to($p->img1)}}">
                </div>
                @endforeach
                  
            </div>  
                </div>
             

                <div class="col-12">
                       <!-- ::::::  Start  Product Style - Default Section [2column]  ::::::  -->
                       <div class="product product--1 swiper-outside-arrow-hover bg-white p-4  radius__all shadow">
                        <div class="row ">
                            <div class="col-12 ">
                                <div class="section-content section-content--border d-md-flex align-items-center justify-content-between ">
                                    <h5 class="section-content__title">{{$site['ish_chiq']}}

                                    </h5>
                                    <a href="{{url('/category')}}">{{$site['barcha']}} <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="product-default-slider-4grid-2row overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            <!-- Start Single Default Product -->
                                            @foreach($product as $p)
                                            <div class="product__box product__box--default product__box--border-hover       swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="{{url('/single/'.$p->id)}}" class="product__img--link">
                                                        <img class="product__img" src="{{URL::to($p->img1)}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">{{$p->price_usd}} $</span>
                                                </div>
                                                <a href="{{url('/single/'.$p->id)}}" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    {{$p->$name}}
                                                </a>
                                                <a href="{{url('/single/'.$p->id)}}"  class="btn btn--box btn-primary btn-block py-3 ">{{$site['batafsil']}}</a>
                                            </div>
                                            @endforeach
                                        
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End  Product Style - Default Section [2column]  ::::::  -->

                    <!-- ::::::  Start banner Section  ::::::  -->
                    <div class="banner banner--1 shadow">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__box">
                                    <a href="#" class="banner__link">
                                        <img src="https://img.imsilkroad.com/special/upload/2019/1129/thumb_600_450_1574991648653.jpg" alt="" class="banner__img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End banner Section  ::::::  -->

                    <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
                    <div class="product product--1 swiper-outside-arrow-hover bg-white p-4  radius__all shadow">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-content section-content--border d-flex  align-items-center justify-content-between">
                                    <h5 class="section-content__title">{{$site['songi']}}

                                    </h5>
                                    <a href="{{url('/category')}}">{{$site['barcha']}} <i class="icon-chevron-right"></i></a>
                                </div>

                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="product-default-slider-4grid overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            
                                            @foreach($product1 as $p)
                                            <div class="product__box product__box--default product__box--border-hover       swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="{{url('/single/'.$p->id)}}" class="product__img--link">
                                                        <img class="product__img" src="{{URL::to($p->img1)}}" alt="">
                                                    </a>

                                                   
                                                  
                                              
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$ {{$p->price_usd}}</span>
                                                </div>
                                                <a href="{{url('/single/'.$p->id)}}" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    {{$p->$name}}
                                                </a>
                                                <a href="{{url('/single/'.$p->id)}}"  class="btn btn--box btn-primary btn-block py-3 ">{{$site['batafsil']}}</a>
                                            </div>
                                            @endforeach 

                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

                    <div class="containe mb-5">
                        <div class="row">
                            <div class="col-12">
                               
                                <div id="map" class="rad_10 bg-white p-4 mt-5">
                                    <h4>{{$site['boglanish']}}</h4>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5">
                               
                                <div class="contact-info-wrap  m-t-40 bg-white m-t-40 shadow contact__height">
                                    <div class="single-contact-info">
                                        <div class="contact-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="contact-info-dec">
                                            <a href="tel://+998904258888">+998 90 425 88 88</a>
                                            <a href="tel://+998334258888">+998 33 425 88 88</a>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="contact-icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="contact-info-dec">
                                            <a href="mailto://urname@email.com">chm.uz</a>
                                            <a href="mailto://urwebsitenaem.com">chinamachinery@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="contact-info-dec">
                                            <span>{{$contact['shahar']}}
                                            </span>
                                            <span>{{$contact['kocha']}}</span>
                                        </div>
                                    </div>
                                    <div class="contact-social m-t-40">
                                        <div class="section-content">
                                            <h5 class="section-content__title">{{$contact['follow']}}</h5>
                                        </div>
                                        <div class="social-link m-t-30">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/invites/contact/?i=189rs5s3qu5ds&utm_content=s8024p" target="_blank"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://youtube.com/channel/UCmNrDVp5pWeQj_OUVVRHAIA" target="_blank"><i class="fab fa-youtube"></i></a>
                                                </li>
                                                <li>
                                                    <a href="https://t.me/CHM_IMPORT" target="_blank"><i class="fab fa-telegram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="contact-form bg-white m-t-40 rad_10 shadow">
                                    <div class="section-content">
                                        <h5 class="section-content__title">{{$contact['hamkor']}}</h5>
                                    </div>
                                    <form class="contact-form-style" id="contact-form" action="{{route('send_sms')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-box__single-group">
                                                    <input type="text" name="name" placeholder="{{$contact['name']}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                               <div class="form-box__single-group">
                                                    <input type="text" name="phone" placeholder="{{$contact['phone']}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                               <div class="form-box__single-group">
                                                    <input type="text" name="subject" placeholder="{{$contact['subject']}}" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-box__single-group">
                                                    <textarea rows="4" minlength="20" placeholder="{{$contact['message']}}" name="message" required></textarea>
                                                </div>
                                                <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight m-t-30 btn-block" type="submit">{{$contact['send']}}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                
                
            </div>


            <div class="container bg-white rad_10 shadow">
                <div class=" p-tb-100 video__part ">
                    <div class="row">
                        @foreach ($product2 as $p)
                         <div class="col-md-6">
                            {!!$p->video1!!}
                         </div>
                         @endforeach
                         
                     
                    </div>
                </div>
            </div>

            <div class="company-logo company-logo--1 swiper-outside-arrow-hover p-tb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-outside-arrow-fix pos-relative">
                                <div class="company-logo__area overflow-hidden swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="width: 1726px; transform: translate3d(-863px, 0px, 0px); transition-duration: 0ms;">
                                        @foreach($partner as $p)
                                        <!-- Start Single Company Logo Item -->
                                        <div class="company-logo__item swiper-slide" style="-webkit-box-ordinal-group: 11; order: 11; margin-top: 0px; width: 287.667px;">
                                            <a href="#" class="company-logo__link">
                                                <img src="{{URL::to($p->img)}}" alt="" class="company-logo__img">
                                            </a>
                                        </div> <!-- End Single Company Logo Item -->
                                        @endforeach
                                    </div>
    
                                    <div class="swiper-buttons">
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next default__nav default__nav--next swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide" aria-disabled="true"><i class="fal fa-chevron-right"></i></div>
                                        <div class="swiper-button-prev default__nav default__nav--prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><i class="fal fa-chevron-left"></i></div>
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
</main>
@endsection