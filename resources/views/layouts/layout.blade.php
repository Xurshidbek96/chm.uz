<!DOCTYPE html>

<html lang="zxx">



    <head>

        <meta charset="UTF-8">

        <title>China Machinery Import</title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    

        <!-- ::::::::::::::Favicon icon::::::::::::::-->

         <link rel="shortcut icon" href="/assets/img/favico.png"jpgpe="image/png">

    

        <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    

        <!-- Vendor CSS Files -->

        <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/vendor/plaza-icon.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">

    

        <!-- Plugin CSS Files -->

        <link rel="stylesheet" href="{{asset('assets/css/plugin/swiper.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/plugin/material-scrolltop.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/plugin/price_range_style.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/plugin/in-number.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/plugin/venobox.min.css')}}">

    

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->

        <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>

        <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>

        <link rel="stylesheet" href="assets/css/main.min.css"> -->

    

        <!-- Main Style CSS File -->

        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    </head>

<?

    if (isset($_COOKIE["lang"])) 

        $lang = $_COOKIE["lang"]; 



    else 

        $lang = 'uz';



    if ($lang == 'ru') {

        $header = array(

            'h1' => 'Время работы с 9:00 до 19:00.',

            'h2' => 'Главная ',

            'h3' => 'Наши сервисы',

            'h4' => 'Перевозки',

            'h5' => 'Консалтинг',

            'h6' => 'Таможенная очистка',

            'h7' => 'Линии',

            'h8' => 'Специальные приемы',

            'h9' => 'Новости',

            'h10' => 'видео',

            'h11' => 'О компании',

            'h12' => 'КОНТАКТ',

        );



        $footer = array(

            'f1' => 'Адрес',

            'f2' => 'г. Наманган, Туракурган

                                    улица, дом 172

                                    Направление: Перед кафе «Азбука»',

            'f3' => 'директор',

            'f4' => 'Применять',

            'f5' => 'Продукты',

            'f6' => 'Поиск',

            'f7' => 'Товар',

            'f8' => 'Наша компания',

            'f9' => 'насчет нас',

            'f10' => 'КОНТАКТ',

            'f11' => 'Присоединяйтесь к нам',

        );

    }

    elseif ($lang == 'en') {

        $header = array(

            'h1' => 'Opening hours from 9:00 to 19:00.',

            'h2' => 'Home ',

            'h3' => 'Our services',

            'h4' => 'Transportation',

            'h5' => 'Consulting',

            'h6' => 'Customs clearance',

            'h7' => 'lines',

            'h8' => 'Special Moves',

            'h9' => 'News',

            'h10' => 'Video',

            'h11' => 'About company',

            'h12' => 'Contact',

        );



        $footer = array(

            'f1' => 'Adress',

            'f2' => 'Namangan city, Turakurgan

                                    street, house 172

                                    Direction: In front of Azbuka Cafe',

            'f3' => 'Director',

            'f4' => 'Apply',

            'f5' => 'Products',

            'f6' => 'Search',

            'f7' => 'Product',

            'f8' => 'our company',

            'f9' => 'about us',

            'f10' => 'Contact',

            'f11' => 'join us',

        );

    }



    else {

        $header = array(

            'h1' => 'Ish vaqti  9:00 dan 19:00 gacha',

            'h2' => 'Bosh sahifa',

            'h3' => 'Bizning xizmatlar',

            'h4' => 'Yuk tashish',

            'h5' => 'Konsalting',

            'h6' => 'Bojxona rasmiylashtiruvi',

            'h7' => 'Liniyalar',

            'h8' => 'Maxsus texnika',

            'h9' => 'Yangiliklar',

            'h10' => 'Video',

            'h11' => 'Kompaniya haqida',

            'h12' => 'Aloqa',

        );



        $footer = array(

            'f1' => 'Manzil',

            'f2' => 'Namangan shaxar, To`raqo`rg`on

                                    ko`cha, 172-uy

                                    Mo`ljal : Azbuka kafesi ruparasida',

            'f3' => 'Rahbar',

            'f4' => 'Murojaat qiling',

            'f5' => 'Mahsulotlar',

            'f6' => 'Qidiruv',

            'f7' => 'Mahsulot',

            'f8' => 'Bizning  Kompaniya',

            'f9' => 'Biz haqimizda',

            'f10' => 'Aloqa',

            'f11' => 'Bizga qo`shiling',

        );

     } 

    $shop = DB::table('shops')->inRandomOrder()->take(1)->get();

?>

<body>

    @foreach($shop as $s)
    <div class="ads__ads">
        <a href="{{$s->link}}">
            <img class="img-fluid" src="{{URL::to($s->img)}}" alt="">
        </a>
    </div>
    @endforeach

    <!-- ::::::  Start  Header Section  ::::::  -->

    <header>

        <!-- ::::::  Start Large Header Section  ::::::  -->

        <div class="header header--1 shadow">

              <!-- Start Header Menu Area -->

              <div class="bg__darkblue">

                <div class="top__nav__contain d-flex justify-content-around py-3">

                    <div class="row">

                        <nav>

                            <ul class="header__nav">



                                <li class="header__nav-item pos-relative  pr-5">

                                    <a class="header__nav-link" href="#">

                                        {{$header['h1']}}

                                    </a>

                                </li>

                                <li class="header__nav-item pos-relative">

                                    <a class="header__nav-link" href="{{url('/')}}">

                                        {{$header['h2']}}

                                    </a>

                                </li>

                                <!--Start Single Nav link-->

                                <li class="header__nav-item pos-relative">

                                    <a href="#" class="header__nav-link">{{$header['h3']}} <i class="icon-chevron-down"></i></a>

                                  

                                    <ul class="dropdown__menu pos-absolute">

                                        <li class="dropdown__list"><a href="#" class="dropdown__link">{{$header['h4']}}</a></li>

                                        <li class="dropdown__list"><a href="#" class="dropdown__link">{{$header['h5']}}</a></li>

                                        <li class="dropdown__list"><a href="#" class="dropdown__link">{{$header['h6']}}</a></li>

                                        

                                    </ul>

                                   

                                </li> 



                               <li class="header__nav-item pos-relative">

                                <a href="{{url('/news')}}" class="header__nav-link">{{$header['h9']}}</a>

                            </li>

                            <li class="header__nav-item pos-relative">

                            <a href="{{url('/video')}}" class="header__nav-link">{{$header['h10']}}</a>

                            </li>

                                

                                <li class="header__nav-item pos-relative">

                                    <a href="{{url('/category')}}" class="header__nav-link">{{$header['h8']}}</a>

                               </li>

                               
                               <li class="header__nav-item pos-relative">

                                     <a href="{{url('/category')}}" class="header__nav-link">   

                                         {{$header['h7']}} 

                                    </a>

                                </li>
                           

                       <li class="header__nav-item pos-relative">

                        <a href="{{url('/about')}}" class="header__nav-link">{{$header['h11']}}</a>

                   </li>

                   <li class="header__nav-item pos-relative">

                    <a href="{{url('/contact')}}" class="header__nav-link">{{$header['h12']}}</a>

               </li>

               <li class="header__nav-item pos-relative pl-3">

                <a href="+998 (90) 425-88-88" class="header__nav-link"><i class="fa fa-phone"></i> +998 (90) 425-88-88</a>

           </li>

                            </ul>

                        </nav>

                    </div>

                </div>

            </div> <!-- End Header Menu Area -->

         

            <!-- Start Header Middle area -->

            <div class="header__middle header__top--style-1 p-tb-10 header-menu">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-3">

                            <div class="header__logo">

                                <a href="{{url('/')}}" class="header__logo-link">

                                    <img src="/assets/img/logo.svg" alt="" class="header__logo-img">

                                </a>

                            </div>

                        </div>

                        <div class="col-lg-7">

                            <div class="row align-items-center">

                                <div class="col-lg-9">

                                  <form class="top__nav__srch" action="{{route('search')}}" method="GET">

                                      <input class="srch__input" name="search" type="search" placeholder="{{$footer['f6']}}" >

                                      <button class="srch__btn" type="submit"><i class="fa fa-search"></i></button>

                                  </form>

                                </div>

                                <div class="col-lg-2 d-flex justify-content-between align-items-center">

                                    <div class="soc__links">

                                           <a href="https://t.me/CHM_IMPORT" target="_blank">

                                               <i class="fab fa-telegram"></i>

                                           </a>

                                           <a href="https://www.instagram.com/invites/contact/?i=189rs5s3qu5ds&utm_content=s8024p" target="_blank">

                                            <i class="fab fa-instagram"></i>

                                        </a>

                                        <a href="https://youtube.com/channel/UCmNrDVp5pWeQj_OUVVRHAIA" target="_blank">

                                            <i class="fab fa-youtube"></i>

                                        </a>

                                        </div> 

                                        <div class="change__lang">

                                            <a class="uzb__lang" onclick="addCookie('uz')" href="#">

                                                <img src="https://img5.goodfon.com/wallpaper/big/0/35/uzbekistan-flag-uzbekistan-large-flag-flag-of-uzbekistan-uzb.jpg" alt="">

                                                <span>UZB</span>

                                            </a>

                                            <a class="rus__lang" href="#" onclick="addCookie('ru')">

                                                <img src="https://cdn.countryflags.com/thumbs/russia/flag-400.png" alt="">

                                                <span>РУС</span>

                                            </a>

                                            <a class="eng__lang" onclick="addCookie('en')" href="#">
                                                <img src="https://www.lineex.es/wp-content/uploads/2016/06/english-flag.png" alt="">
                                                <span>ENG</span>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div> <!-- End Header Middle area -->



          

        </div> <!-- ::::::  Start Large Header Section  ::::::  -->

        

        <!-- ::::::  Start Mobile Header Section  ::::::  -->

        <div class="header__mobile mobile-header--1">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-12">

                        <!-- Start Header Mobile Top area -->

                        <div class="header__mobile-top">

                            <div class="mobile-header__logo">

                                <a href="{{url('/')}}" class="mobile-header__logo-link">

                                    <img src="/assets/img/logo.svg" alt="" class="mobile-header__logo-img">

                                </a>

                            </div>

                            <div class="header__wishlist-box">

                                <div class="change__lang">

                                    <a class="uzb__lang mr-1" onclick="addCookie('uz')" href="#">

                                        <img src="https://img5.goodfon.com/wallpaper/big/0/35/uzbekistan-flag-uzbekistan-large-flag-flag-of-uzbekistan-uzb.jpg" alt="">

                                        <span>UZB</span>

                                    </a>

                                    <a class="rus__lang" onclick="addCookie('ru')" href="#">

                                        <img src="https://cdn.countryflags.com/thumbs/russia/flag-400.png" alt="">

                                        <span>РУС</span>

                                    </a>

                                    <a class="eng__lang" onclick="addCookie('en')" href="#">
                                        <img src="https://cdn.countryflags.com/thumbs/russia/flag-400.png" alt="">
                                        <span>ENG</span>
                                    </a>

                                </div>



                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle m-l-20"><i class="icon-menu"></i></a>



                            </div>

                        </div> <!-- End Header Mobile Top area -->



                        <!-- Start Header Mobile Middle area -->

                        <div class="header__mobile-middle header__top--style-1 p-tb-10">

                          

                        </div> <!-- End Header Mobile Middle area -->



                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <form class="top__nav__srch" action="#">

                            <input class="srch__input" type="search" placeholder="{{$footer['f7']}}" >

                            <button class="srch__btn" type="submit"><i class="fa fa-search"></i></button>

                        </form>

                    </div>

                </div>

            </div>

        </div> <!-- ::::::  Start Mobile Header Section  ::::::  -->



        <!-- ::::::  Start Mobile-offcanvas Menu Section  ::::::  -->

        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">

            <button class="offcanvas__close offcanvas-close">&times;</button>

            <div class="offcanvas-inner">

                <div class="offcanvas-menu m-b-30">

                   

                    <ul>

                        <li><a href="{{url('/')}}">{{$header['h2']}}</a></li>

                        <li>

                            <a href="#"><span>{{$header['h3']}}</span></a>

                            <ul class="sub-menu">

                                <li><a href="#"><span class="menu-text">{{$header['h4']}}</span></a></li>

                                <li><a href="{{url('/contact')}}"><span class="menu-text">{{$header['h5']}}</span></a></li>

                                <li> <a href="#"><span class="menu-text">{{$header['h6']}}</span></a></li>

                                

                            </ul>

                        </li>

                        

                        <li><a href="#">{{$header['h7']}}</a></li>

                        

                        <li><a href="{{url('/category')}}">{{$header['h8']}}</a></li>

                        

                        <li><a href="{{url('/news')}}">{{$header['h9']}}</a></li>



                        

                        <li><a href="{{url('/video')}}">{{$header['h10']}}</a></li>

                        <li><a href="{{url('/about')}}">{{$header['h11']}}</a></li>

                        <li><a href="{{url('/contact')}}">{{$header['h12']}}</a></li>

                    </ul>

                </div>

                <div class="offcanvas-buttons m-b-30">

                    <a href="https://t.me/CHM_IMPORT" target="_blank" class="user"><i class="fab fa-telegram"></i></a>

                    <a href="https://www.instagram.com/invites/contact/?i=189rs5s3qu5ds&utm_content=s8024p" target="_blank"><i class="fab fa-instagram"></i></a>

                    <a href="https://youtube.com/channel/UCmNrDVp5pWeQj_OUVVRHAIA" target="_blank"><i class="fab fa-youtube"></i></a>

                </div>

              

            </div>

        </div> <!-- ::::::  End Mobile-offcanvas Menu Section  ::::::  -->



      



        <div class="offcanvas-overlay"></div>

    </header> <!-- ::::::  End  Header Section  ::::::  -->



    @yield('content')



    <footer class="footer">

        <div class="footer__top footer__bg p-tb-100">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-md-12">

                        <div class="footer__about">

                            <div class="footer__logo">

                                <a href="{{url('/')}}" class="footer__logo-link">

                                    <img src="/assets/img/logo.svg" alt="" class="footer__logo-img">

                                </a>

                            </div>



                            <ul class="footer__address">

                                <li   class="footer__address-item"><span>{{$footer['f1']}} : </span>{{$footer['f2']}}</li>

                                <li class="footer__address-item"><span>{{$footer['f3']}}: </span> BANNAEV DOVUDJON OSIMXON UGLI

                                    <a href="tel:+998334258888">+998334258888</a> </li>

                                <li class="footer__address-item"><span> {{$footer['f4']}} : </span> <a

                                        href="tel:++998904258888">+998(90)425-88-88</a> </li>

                                <li class="footer__address-item"><span>{{$footer['f4']}} : </span> <a

                                        href="mailto:chinamachineryimport@gmail.com">chinamachineryimport@gmail.com</a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-4">

                        <div class="footer__menu">

                            <h4 class="footer__nav-title text-warning">{{$footer['f5']}}</h4>

                            <ul class="footer__nav">

                                <li class="footer__list"><a href="#" class="footer__link">{{$footer['f6']}}</a></li>

                                <li class="footer__list"><a href="{{url('/category')}}" class="footer__link">{{$footer['f7']}}</a></li>



                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-2 col-md-4">

                        <div class="footer__menu">

                            <h4 class="footer__nav-title text-warning">{{$footer['f8']}}</h4>

                            <ul class="footer__nav">

                                <li class="footer__list"><a href="{{url('/about')}}" class="footer__link">{{$footer['f9']}}</a></li>

                                <li class="footer__list"><a href="{{url('/contact')}}" class="footer__link">{{$footer['f10']}}</a></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4">

                        <div class="row">

                            <div class="col-12">

                                <div class="footer__menu">

                                    <h4 class="footer__nav-title text-warning">{{$footer['f11']}}</h4>

                                    <ul class="footer__social-nav">
                                        <li class="footer__social-list"><a href="#" class="footer__social-link"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li class="footer__social-list"><a href="https://t.me/CHM_IMPORT" target="_blank" class="footer__social-link"><i
                                                    class="fab fa-telegram"></i></a></li>
                                        <li class="footer__social-list"><a href="https://youtube.com/channel/UCmNrDVp5pWeQj_OUVVRHAIA" target="_blank" class="footer__social-link"><i
                                                    class="fab fa-youtube"></i></a></li>
                                        <li class="footer__social-list"><a href="https://www.instagram.com/invites/contact/?i=189rs5s3qu5ds&utm_content=s8024p" target="_blank" class="footer__social-link"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>





            </div>

        </div>

    </footer>



    <!-- material-scrolltop button -->

    <button class="material-scrolltop" type="button"></button>









  

    <!-- ::::::::::::::All Javascripts Files here ::::::::::::::-->



    <script>

        function addCookie(lan) {

        document.cookie = `lang=${lan}`;

        var url = window.location.href;

        window.location.reload(url);

        }

    </script>



    <!-- Vendor JS Files -->

    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <script src="{{asset('assets/js/vendor/jquery-ui.min.js')}}"></script>

    <script src="{{asset('assets/js/vendor/bootstrap.bundle.js')}}"></script>



    <!-- Plugins JS Files -->

    <script src="{{asset('assets/js/plugin/swiper.min.js')}}"></script>

    <script src="{{asset('assets/js/plugin/jquery.countdown.min.js')}}"></script>

    <script src="{{asset('assets/js/plugin/material-scrolltop.js')}}"></script>

    <script src="{{asset('assets/js/plugin/price_range_script.js')}}"></script>

    <script src="{{asset('assets/js/plugin/in-number.js')}}"></script>

    <script src="{{asset('assets/js/plugin/jquery.elevateZoom-3.0.8.min.js')}}"></script>

    <script src="{{asset('assets/js/plugin/venobox.min.js')}}"></script>



    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>

    <script src="assets/js/plugin/plugins.min.js"></script> -->



    <!-- Main js file that contents all jQuery plugins activation. -->

    <script src="{{asset('assets/js/main.js')}}"></script>

</body>



</html>