@extends('layouts.layout')

@section('content')
    <main id="main-container" class="main-container m-t-30">
        <div class="container">
            <div class="row flex-column flex-lg-row">
                <div class="col-lg-3 col-xl-3">
                    <!-- menu content -->
                    @include('sections.category')
                    <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->

                </div>

                <div class="col-lg-9 col-xl-9">
                    <!-- yangi code -->
                    <div class="p-3 bg-blueee mb-3 rounded">
                        <h1>CHINA MACHINERY IMPORT</h1>
                        <!-- yangi code -->
                    </div>
                    <!-- ::::::  Start Hero Section  ::::::  -->
                    <div class="hero hero-slider hero---2 shadow">
                        <div class="swiper-wrapper">
                            <a href="#" class="swiper-slide">
                                <img src="./assets/img/stanok4.jpg" alt="">
                            </a>
                            <a href="#" class="swiper-slide">
                                <img src="./assets/img/stanok4.jpg" alt="">
                            </a>
                            <a href="#" class="swiper-slide">
                                <img src="./assets/img/stanok4.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-pagination hero__dots hero__dots--2"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <!-- Add Arrows -->
                            <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i>
                            </div>
                            <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i>
                            </div>
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
                                                <img class="cms__icon-img" src="/assets/img/icon/cms/icon1.png"
                                                    alt="">
                                            </div>
                                            <div class="cms__text">
                                                <h6 class="cms__title">BARCHA TOVARLAR SERTIFIKATLANGAN</h6>
                                            </div>
                                        </div>
                                    </div> <!-- End Single CMS box -->
                                    <!-- Start Single CMS box -->
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="cms__content d-flex align-items-center justify-content-around shadow">
                                            <div class="cms__icon">
                                                <img class="cms__icon-img" src="/assets/img/icon/cms/icon2.png"
                                                    alt="">
                                            </div>
                                            <div class="cms__text">
                                                <h6 class="cms__title">OFISLARIMIZ XITOYDA VA O'ZBEKISTONDA MAVJUD</h6>
                                            </div>
                                        </div>
                                    </div> <!-- End Single CMS box -->
                                    <!-- Start Single CMS box -->
                                    <div class="col-md-4 col-sm-6 col-12">
                                        <div class="cms__content d-flex align-items-center justify-content-around shadow">
                                            <div class="cms__icon">
                                                <img class="cms__icon-img" src="/assets/img/icon/cms/icon3.png"
                                                    alt="">
                                            </div>
                                            <div class="cms__text">
                                                <h6 class="cms__title">SIFATNI KAFOLATLASH UCHUN 1 YIL</h6>
                                            </div>
                                        </div>
                                    </div> <!-- End Single CMS box -->
                                    <!-- Start Single CMS box -->

                                </div>
                            </div> <!-- ::::::  End CMS Section  ::::::  -->


                            <div class=" swiper-outside-arrow-hover bg-white p-4  radius__all shadow">
                                <div class="row ">
                                    <div class="col-12 ">
                                        <!-- <div class="section-content section-content--border d-md-flex align-items-center justify-content-between ">
                                    <h5 class="section-content__title">ISHLAB CHIQARISH LINIYALARI


                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 px-4">
                                        <div class="swiper-outside-arrow-fix pos-relative">
                                            <div
                                                class="company-logo__area-2 overflow-hidden swiper-container-initialized swiper-container-horizontal">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide border p-3">
                                                        <div class="product_card">
                                                            <a href="./single-1.html" class="product_card_link">
                                                                <img src="./assets/img/beton3.png" alt="">
                                                            </a>

                                                            <p class="text-secondary py-2 ">Beton qorigich</p>
                                                            <h4 class="text-info">10800$</h4>

                                                            <a href="./single-1.html"
                                                                class="btn btn-block btn-primary p-3">Batafsil</a>

                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide border p-3">
                                                        <div class="product_card">
                                                            <a href="./single-1.html" class="product_card_link">
                                                                <img src="./assets/img/beton3.png" alt="">
                                                            </a>

                                                            <p class="text-secondary py-2 ">Beton qorigich</p>
                                                            <h4 class="text-info">10800$</h4>

                                                            <a href="./single-1.html"
                                                                class="btn btn-block btn-primary p-3">Batafsil</a>

                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide border p-3">
                                                        <div class="product_card">
                                                            <a href="./single-1.html" class="product_card_link">
                                                                <img src="./assets/img/beton3.png" alt="">
                                                            </a>

                                                            <p class="text-secondary py-2 ">Beton qorigich</p>
                                                            <h4 class="text-info">10800$</h4>

                                                            <a href="./single-1.html"
                                                                class="btn btn-block btn-primary p-3">Batafsil</a>

                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide border p-3">
                                                        <div class="product_card">
                                                            <a href="./single-1.html" class="product_card_link">
                                                                <img src="./assets/img/beton3.png" alt="">
                                                            </a>

                                                            <p class="text-secondary py-2 ">Beton qorigich</p>
                                                            <h4 class="text-info">10800$</h4>

                                                            <a href="./single-1.html"
                                                                class="btn btn-block btn-primary p-3">Batafsil</a>

                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="swiper-buttons">
                                                    <!-- Add Arrows -->
                                        <div class="swiper-button-next default__nav default__nav--next swiper-button-disabled"
                                            tabindex="-1" role="button" aria-label="Next slide" aria-disabled="true">
                                            <i class="fal fa-chevron-right"></i>
                                        </div>
                                        <div class="swiper-button-prev default__nav default__nav--prev" tabindex="0"
                                            role="button" aria-label="Previous slide" aria-disabled="false"><i
                                                class="fal fa-chevron-left"></i>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        </div>

        <div class="col-12">
            <!-- ::::::  Start  Product Style - Default Section [2column]  ::::::  -->
            <div class="product product--1 swiper-outside-arrow-hover bg-white p-4  radius__all shadow">
                <div class="row ">
                    <div class="col-12 ">
                        <div
                            class="section-content section-content--border d-md-flex align-items-center justify-content-between ">
                            <h5 class="section-content__title">ISHLAB CHIQARISH LINIYALARI

                            </h5>
                            <a href="single-1.html">Barchasini ko'rish <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="product-default-slider-4grid-2row overflow-hidden  m-t-50">
                                <div class="swiper-wrapper">
                                    <!-- Start Single Default Product -->
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton2.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">10500$</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            Beton plita qolipi
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton3.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">330 $</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            Beton qorigich (200 litr)
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/mejalka.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">750$ </span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            Meshalka 400litr (shlakoblok stanok)
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton4.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">3800 $</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            Sement qadoqlash uskunasi
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img//stanok4.jpg" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img//stanok4.jpg" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img//stanok4.jpg" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>


                                </div>
                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev"><i
                                            class="fal fa-chevron-left"></i></div>
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
                            <a href="single-1.html" class="banner__link">
                                <img src="https://img.imsilkroad.com/special/upload/2019/1129/thumb_600_450_1574991648653.jpg"
                                    alt="" class="banner__img">
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- ::::::  End banner Section  ::::::  -->

            <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
            <div class="product product--1 swiper-outside-arrow-hover bg-white p-4  radius__all shadow">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="section-content section-content--border d-flex  align-items-center justify-content-between">
                            <h5 class="section-content__title">SO'NGI USKUNALAR

                            </h5>
                            <a href="single-1.html">Barchasini ko'rish <i class="icon-chevron-right"></i></a>
                        </div>

                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="product-default-slider-4grid overflow-hidden  m-t-50">
                                <div class="swiper-wrapper">

                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton4.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton3.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton2.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/beton4.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>
                                    <div
                                        class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="/assets/img/mejalka.png" alt="">
                                            </a>




                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html"
                                            class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                        <a href="./single-1.html"
                                            class="btn btn--box btn-primary btn-block py-3 ">Batafsil</a>
                                    </div>

                                </div>
                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev"><i
                                            class="fal fa-chevron-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

            <div class="container mb-5">
            @include('sections.contact')
            </div>

        </div>


        </div>


        <div class="container bg-white rad_10 shadow">
            <div class=" p-tb-100 video__part ">
                <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/1O0yazhqaxs" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/1O0yazhqaxs" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/1O0yazhqaxs" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.youtube.com/embed/1O0yazhqaxs" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>


                </div>
            </div>
        </div>

        <div class="company-logo company-logo--1 swiper-outside-arrow-hover p-tb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div
                                class="company-logo__area overflow-hidden swiper-container-initialized swiper-container-horizontal">
                                <div class="swiper-wrapper"
                                    style="width: 1726px; transform: translate3d(-863px, 0px, 0px); transition-duration: 0ms;">
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide" style="order: 0; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 1; order: 1; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide swiper-slide-prev"
                                        style="-webkit-box-ordinal-group: 2; order: 2; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide swiper-slide-active"
                                        style="-webkit-box-ordinal-group: 3; order: 3; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide swiper-slide-next"
                                        style="-webkit-box-ordinal-group: 4; order: 4; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 5; order: 5; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 6; order: 6; margin-top: 0px; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 7; order: 7; margin-top: 0px; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 8; order: 8; margin-top: 0px; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 9; order: 9; margin-top: 0px; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 10; order: 10; margin-top: 0px; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->
                                    <!-- Start Single Company Logo Item -->
                                    <div class="company-logo__item swiper-slide"
                                        style="-webkit-box-ordinal-group: 11; order: 11; margin-top: 0px; width: 287.667px;">
                                        <a href="#" class="company-logo__link">
                                            <img src="https://top.uz/upload/iblock/a9d/a9d9c7994cdee9aa95175349cabfb891.jpg"
                                                alt="" class="company-logo__img">
                                        </a>
                                    </div> <!-- End Single Company Logo Item -->

                                </div>

                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next swiper-button-disabled"
                                        tabindex="-1" role="button" aria-label="Next slide" aria-disabled="true"><i
                                            class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev" tabindex="0"
                                        role="button" aria-label="Previous slide" aria-disabled="false"><i
                                            class="fal fa-chevron-left"></i></div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </main>
@endsection
