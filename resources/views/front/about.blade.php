@extends('layouts.layout')



@section('content')



<!-- ::::::  Start  Breadcrumb Section  ::::::  -->

    <div class="page-breadcrumb">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <ul class="page-breadcrumb__menu">

                        <li class="page-breadcrumb__nav"><a href="{{url('/')}}">{{$site['home']}}</a></li>

                        <li class="page-breadcrumb__nav active">{{$site['about']}}</li>

                    </ul>

                </div>

            </div>

        </div>

    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->



    <!-- ::::::  Start  Main Container Section  ::::::  -->

    <main id="main-container" class="main-container">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="about-top m-b-30">

                        <div class="row">

                            @foreach($about as $a)
                            <div class="col-lg-6">

                                <div class="about-img m-b-30">

                                    <div class="img-responsive m-b-40">

                                        <img src="{{URL::to($a->img)}}" alt="">

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="about-content">

                                    <h1 class="title title--large title--thin">{{$site['welcome']}}</h1>

                                    <div class="para__content">

                                        {!!$a->$welcome!!}

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-12">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="about-single m-t-30">

                                <h3 class="title title--small title--regular">{{$site['our']}}</h3>

                                <div class="para__content">

                                    {!!$a->$company!!}

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="about-single m-t-30">

                                <h3 class="title title--small title--regular">{{$site['team']}}</h3>

                                <div class="para__content">

                                    {!!$a->$team!!}

                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="about-single m-t-30">

                                <h3 class="title title--small title--regular">{{$site['testimonial']}}</h3>

                                <div class="para__content">

                                    {!!$a->$testimonial!!}

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                @endforeach

            </div>

        </div>

    </main> <!-- ::::::  End  Main Container Section  ::::::  -->



  



    <!-- material-scrolltop button -->

    <button class="material-scrolltop" type="button"></button>



@endsection