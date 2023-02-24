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


                    @include('sections.products')

                    <div class="page-pagination">
                        <span>Qolgan sahifalar</span>
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item">
                                <a class="page-pagination__link btn btn--gray" href="#"><i
                                        class="icon-chevron-left"></i> Previous</a>
                            </li>
                            <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"
                                    href="#">1</a></li>
                            <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray"
                                    href="#">2</a></li>
                            <li class="page-pagination__item">
                                <a class="page-pagination__link btn btn--gray" href="#">Next<i
                                        class="icon-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>




                </div>




            </div>





        </div>
    </main>
@endsection
