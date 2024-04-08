@php
    $setting = getsetting();
@endphp
<section class="info_section ">
    <div class="info_container layout_padding2">
        <div class="container">
            <div class="info_logo text-start d-block">


                <a class="navbar-brand" href="{{ route('front.index') }}"> {{ $setting->websitename ?? 'Website' }}</span>
                </a>

            </div>
            <div class="info_main">
                <div class="row">
                    <div class="col-md-3 col-lg-2">
                        <div class="info_link-box">
                            <h5>
                                Useful Link
                            </h5>
                            <ul>
                                <li class=" active">
                                    <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="">
                                    <a class="" href="about.html">About </a>
                                </li>
                                <li class="">
                                    <a class="" href="service.html">Services </a>
                                </li>
                                <li class="">
                                    <a class="" href="portfolio.html"> Portfolio </a>
                                </li>
                                <li class="">
                                    <a class="" href="contact.html"> Contact </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <h5>
                            About Us
                        </h5>
                        <p>
                            {{ $setting->websitetext ?? 'Website' }}
                        </p>
                    </div>


                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="info_contact ">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#" class="link-box">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>
                                            {{ $setting->location ?? 'location' }}
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <a href="#" class="link-box">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>
                                            Call {{ $setting->phone ?? 'phone' }}

                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="link-box">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>
                                            {{ $setting->email ?? 'email' }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- end info section -->

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy;
            <span id="displayYear"></span>
            All Rights Reserved By
            <a href="">Monu Kumar</a>
        </p>
    </div>
</footer>
