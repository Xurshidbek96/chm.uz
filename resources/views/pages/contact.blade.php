@extends('layouts.layout')

@section('content')

    <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                        <li class="page-breadcrumb__nav active">Contact Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            @include('sections.contact')
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->
@endsection
