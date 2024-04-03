@extends('Front.layout.app')
@section('content')
    <div class="hero_area">
        <section class="slider_section "
            style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/b/b6/Image_created_with_a_mobile_phone.png'); background-size: cover">

            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="container">
                                <div class="detail-box">
                                    @php
                                        $textLength = strlen($slider->text1);
                                        $splitPoint = ceil($textLength / 2);
                                        $firstHalf = substr($slider->text1, 0, $splitPoint);
                                        $secondHalf = substr($slider->text1, $splitPoint);
                                    @endphp
                                    <h1>
                                        {{ $firstHalf }} <br> {{ $secondHalf }}

                                    </h1>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Read More
                                        </a>
                                        <a href="" class="btn2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <section class="about_section layout_padding" id="about">
        <div class="container  ">
            <div class="row">
                @foreach ($abouts as $about)
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                @php
                                    $textLength = strlen($about->text1);
                                    $splitPoint = ceil($textLength / 2);
                                    $firstHalf = substr($about->text1, 0, $splitPoint);
                                    $secondHalf = substr($about->text1, $splitPoint);
                                @endphp
                                <h2><span>{!! $firstHalf !!}</span> {{ $secondHalf }}</h2>
                            </div>
                            <p>
                                {{ $about->text2 }}
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <img src="{{ asset($about->image) }}" alt="" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="portfolio_section" id="project">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Work
                </h2>
            </div>
            {{-- <div class="carousel-wrap ">
                <div class="filter_box">
                    <nav class="owl-filter-bar">
                        <a href="#" class="item active" data-owl-filter="*">All</a>
                        @foreach ($projects as $project)
                            <a href="#" class="item"
                                data-owl-filter=".{{ $project->category_id }}">{{ $project->category_id }}</a>
                        @endforeach

                    </nav>
                </div>
            </div> --}}
        </div>
        <div class="owl-carousel portfolio_carousel">
            @foreach ($projects as $project)
                <div class="item {{ $project->category_id }}">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset($project->image) }}" alt="" />
                            <div class="btn_overlay">
                                <p>
                                    {{ $project->name }}
                                    <br>
                                    {{ $project->desc }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        </div>
    </section>
    <section class="service_section layout_padding" id="serve">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-sm-6 col-md-4 text-black ">
                        <a href="{{ route('front.service', ['service' => $service->id]) }}"
                            class="text-decoration-none text-black">


                            {{-- <a href="{{ route('front.service', ['name' => str_replace(" ", "-", $service->text1)]) }}" class="text-decoration-none text-black"> --}}

                            <div class="box ">
                                <div class="img-box">
                                    <img src="{{ asset($service->image) }}" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $service->text1 }}
                                    </h5>
                                    <p>
                                        {{ $service->text2 }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>
    <section class="contact_section" id="contact">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Get In <span>Touch</span></h2>
            </div>
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="form_container">
                        <form id="contactForm" action="{{ route('admin.contact.add') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="number" class="form-control" name="phone" placeholder="Phone Number" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <select name="prov" id="" class="form-control wide">
                                        <option value="" selected disabled>Select Province</option>
                                        <option value="1">Province 1</option>
                                        <option value="2">Province 2</option>
                                        <option value="3">Bagmati Province</option>
                                        <option value="4">Gandaki Province</option>
                                        <option value="5">Province 5</option>
                                        <option value="6">Karnali Province</option>
                                        <option value="7">Sudurpashchim Province</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="email" name="email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" name="desc" class="message-box form-control"
                                        placeholder="Message" />
                                </div>
                            </div>
                            <div class="btn_box">
                                <button type="submit" id="submitButton">
                                    <div class="spinner-border" id="spinner" role="status" style="display: none;">
                                    </div>
                                    <span id="new">SEND</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="map_container">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    < @endsection @section('js') <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            document.getElementById("spinner").style.display = "block"; // Show the spinner when form is submitted
            document.getElementById("new").style.display = "none"; // Show the spinner when form is submitted
        });
    </script>
@endsection
