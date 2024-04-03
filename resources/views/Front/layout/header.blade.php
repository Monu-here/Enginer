@php
    $setting = getsetting();
@endphp
@php
    $textLength = strlen($setting->websitename);
    $splitPoint = ceil($textLength / 2);
    $firstHalf = substr($setting->websitename, 0, $splitPoint);
    $secondHalf = substr($setting->websitename, $splitPoint);
@endphp

<div class="header_top">
    <div class="container-fluid header_top_container">
        <a class="navbar-brand" href="{{ route('front.index') }}"> {{ $firstHalf }}<span>{{ $secondHalf }}</span>
        </a>
        <div class="contact_nav">
            <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                    {{$setting->location}}
                </span>
            </a>
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                    Call :         {{$setting->phone}}

                </span>
            </a>
            <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  {{$setting->email}}

                </span>
            </a>
        </div>
        
    </div>
</div>
