@php
    $setting = getsetting();
@endphp
 

<div class="header_top">
    <div class="container-fluid header_top_container">
        <a class="navbar-brand" href="{{ route('front.index') }}"> {{ $setting->websitename ?? "Website"}}
        </a>
        <div class="contact_nav">
            <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                    {{$setting->location??"location"}}
                </span>
            </a>
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    Call :         {{$setting->phone??"phone"}}

                </span>
            </a>
            <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  {{$setting->email??"email"}}

                </span>
            </a>
        </div>
        
    </div>
</div>
