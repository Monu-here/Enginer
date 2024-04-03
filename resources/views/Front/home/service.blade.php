@extends('Front.layout.app')
@section('content')
    <form action="{{ route('front.service', ['service' => $service->id]) }}">
        <section id="intro" class="section_padding mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-container text-center ">
                            <h2>Our Service</h2>
                            <div class="hr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="main-course">
            <div class="container">
                <div class="row d-flex row-eq-height no-gutters">
                    <div class="col-md-6 mt-5">
                        <img src="{{ asset($service->image) }}" width="100%" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="main-course-desc left-arrow-container d-flex align-items-center justify-content-center"
                            style="background-image:url('https://ace.edu.np/wp-content/themes/ace-institute-of-management/img/trianglebg-01.svg')">
                            <div>
                                
                                <div class="course-info p-0">
                                    <h1>{{ $service->text1 }}</h1>
                                    <h2>{{$service->text2}}</h2>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@endsection
