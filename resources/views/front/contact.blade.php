@extends('layouts.layout')



@section('content')



<!-- ::::::  Start  Breadcrumb Section  ::::::  -->

    <div class="page-breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <ul class="page-breadcrumb__menu">

                        <li class="page-breadcrumb__nav"><a href="{{url('/')}}">{{$site['s1']}}</a></li>

                        <li class="page-breadcrumb__nav active">{{$site['s2']}}</li>

                    </ul>

                </div>

            </div>

        </div>

    </div> <!-- ::::::  Start  Breadcrumb Section  ::::::  -->



    <!-- ::::::  Start  Main Container Section  ::::::  -->

    <main id="main-container" class="main-container">

        @if ($message = Session::get('success'))

                <div class="alert alert-success">

                    <p>{{ $message }}</p>

                </div>

            @endif

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div id="map">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen></iframe>

                    </div>

                </div>

                <div class="col-lg-4 col-md-5">

                    <div class="contact-info-wrap gray-bg m-t-40">

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

                                <span>{{$site['s3']}} : </span>

                                <span>{{$site['s4']}}</span>

                            </div>

                        </div>

                        <div class="contact-social m-t-40">

                            <div class="section-content">

                                <h5 class="section-content__title">{{$site['s5']}}</h5>

                            </div>

                            <div class="social-link m-t-30">

                                <ul>

                                    <li>
                                        <a href="#" ><i class="fab fa-facebook-f"></i></a>
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

                    <div class="contact-form gray-bg m-t-40">

                        <div class="section-content">

                            <h5 class="section-content__title">{{$site['s6']}}</h5>

                        </div>

                        <form class="contact-form-style" id="contact-form" action="{{route('send_sms')}}" method="POST">

                            @csrf

                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="form-box__single-group">

                                        <input type="text" name="name" placeholder="{{$site['s7']}}" required>

                                    </div>

                                </div>

                                <div class="col-lg-6">

                                   <div class="form-box__single-group">

                                        <input type="text" name="phone" placeholder="{{$site['s8']}}" required>

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                   <div class="form-box__single-group">

                                        <input type="text" name="subject" placeholder="{{$site['s9']}}" required>

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="form-box__single-group">

                                        <textarea rows="4" minlength="20" placeholder="{{$site['s10']}}" name="message" required></textarea>

                                    </div>

                                    <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight m-t-30" type="submit">{{$site['s11']}}</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </main> <!-- ::::::  End  Main Container Section  ::::::  -->



  



    <!-- material-scrolltop button -->

    <button class="material-scrolltop" type="button"></button>



@endsection