@php
    $setting = getsetting();
@endphp
<div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-home'></i>
        <span class="logo_name">Menu</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('admin.home')}}">
                <i class='bx bx-home'></i>
                <span class="link_name">Home</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Home</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.slider.index')}}">
                <i class='bx bx-home'></i>
                <span class="link_name">Slider</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Slider</a></li>
            </ul>
        </li>


        <li>
            <a href="{{route('admin.about.index')}}">
                <i class='bx bxs-credit-card'></i>
                <span class="link_name">About Us</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">About Us</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.service.index')}}">
                <i class='bx bx-bar-chart'></i>
                <span class="link_name">Service</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('admin.service.index')}}">Service</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.project.index')}}">
                <i class='bx bx-bar-chart'></i>
                <span class="link_name">Project</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('admin.project.index')}}">Project</a></li>
            </ul>
        </li>
        
        <li>
            <a href="{{route('admin.setting.add')}}">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="{{route('admin.setting.add')}}">Setting</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <a href="{{ route('adminLogin.logout') }}">
                    <div class="profile-content">
                        <img src="https://sachinsamal.netlify.app/static/media/sachin-samal.d451ea9b3c53ed984bf7.png"
                            alt="profileImg">
                    </div>
                </a>
                <div class="name-job">
                    <a href="{{ route('adminLogin.logout') }}">
                        <div class="profile_name">John Doe</div>
                        <div class="job">Crypto Expert</div>
                    </a>
                </div>
                <a href="{{ route('adminLogin.logout') }}">
                    <i class='bx bx-log-out'></i>
                </a>
            </div>
        </li>
    </ul>
</div>
