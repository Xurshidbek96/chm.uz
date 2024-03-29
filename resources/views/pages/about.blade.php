@extends('layouts.layout')

@section('content')
    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">About</li>
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
                            <div class="col-lg-6">
                                <div class="about-img m-b-30">
                                    <div class="img-responsive m-b-40">
                                        <img src="/assets/img/beton4.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-content">
                                    <h1 class="title title--large title--thin">Welcome To Kinle</h1>
                                    <div class="para__content">
                                        <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed
                                            dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero
                                            officiis eveniet accusamus recusandae. Temporibus amet ducimus sapiente
                                            voluptatibus autem dolorem magnam quas, porro suscipit. Quibusdam culpa
                                            asperiores exercitationem architecto quo distinctio sed dolorem aspernatur
                                            veritatis repellendus dolorum voluptate!</p>
                                        <p class="para__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Labore aperiam fugit consequuntur voluptatibus ex sint iure in, distinctio sed
                                            dolorem aspernatur veritatis repellendus dolorum voluptate, animi libero
                                            officiis eveniet accusamus recusandae. </p>
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
                                <h3 class="title title--small title--regular">Our Company</h3>
                                <div class="para__content">
                                    <p class="para__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                        Lorem ipsum dolor sit amet conse .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-single m-t-30">
                                <h3 class="title title--small title--regular">Our Team</h3>
                                <div class="para__content">
                                    <p class="para__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                        Lorem ipsum dolor sit amet conse .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-single m-t-30">
                                <h3 class="title title--small title--regular">Testimonial</h3>
                                <div class="para__content">
                                    <p class="para__text">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                        Lorem ipsum dolor sit amet conse .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
