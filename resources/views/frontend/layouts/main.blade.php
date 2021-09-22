<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('data.site-title')}}</title>
    <link rel="shortcut icon" href="frontend/img/Logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/style/main.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="{{asset('frontend/style/slick.css')}}">
</head>

<body>
<!-- Main page -->
<div class="container-fluit">
    <!-- Header  -->
    <header>
        <!-- Navbar start -->
        <nav class="navbar navbar-expand-lg m-0 p-0">
            <div class="navbar-brand m-0 p-0">
                <a class="logo-link" href="/">
                <img src="{{asset('frontend/img/Logo/Logo.png')}}" alt="Logo">
                <span class="logo-text d-none d-xl-block">Muhammad al-Xorazmiy nomidagi Toshkent Axborot Texnologiyalari Universiteti Samarqand filiali</span>
            </a>
            </div>
            <button id="navbarToggle" class="navbarToggle"><i class="fas fa-bars"></i></button>
            <div class="navbar-menu" id="navbarSupportedContent">
                <ul class="head mb-0">
                    <li class="lang">
                        <a class="lang-active" href="#">{{config("app.locale_names." . request()->segment(1))}}</a>
                        <div class="drop-down-lang">
                            @foreach(config('app.locale_names') as $index => $value)
                                @if($index != request()->segment(1))
                                    <a href="/{{$index}}">{{$value}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li><a href="http://student.samtuit.uz/">Hemis Student</a></li>
                    <li><a href="http://hemis.samtuit.uz/">Hemis OTM</a></li>
                    <li><a href="http://mt.samtuit.uz/">Moodle</a></li>
                </ul>
                {{--                @dump($menus[0]['data'])--}}
                <ul class="navbar-nav  navbar-col-md-2">
                    @foreach($menus as $menu)
                        <li class="nav-item">
                            <span class="nav-drop fas fa-angle-down fas fa-angle-down"></span>
                            <a class="nav-link"
                               href="{{ $menu['children'] ? '#' : $menu['link'] }}">{{$menu['title']}}</a>
                            @if($menu['children'])
                                <ul class="drop-down-link {{$menu['hasDouble'] ? 'big-menu pt-lg-4' : 'smal-menu'}} {{$menu['id'] == 9 ? 'oxirgi_menu' : ''}}">
                                    @if($menu['hasDouble'])
                                        @foreach($menu['children'] as $childs)
                                            <li>
                                                <h4>{{$childs['title']}}</h4>
                                                <ul>
                                                    @if($childs['children'])
                                                        @foreach($childs['children'] as $new)
                                                            <li>
                                                                <a href="{{$new['link']}}">{{$new['title']}}</a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach
                                    @else
                                        @if($menu['children'])
                                            @foreach($menu['children'] as $childs)
                                                <li><a href="{{$childs['link']}}">{{$childs['title']}}</a></li>
                                            @endforeach
                                        @endif
                                    @endif
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav><!-- Navbar end -->
    </header><!-- Header end -->
    @yield('content')
    <button class="scrollToTopBtn"><i class="fas fa-level-up-alt"></i></button>
    <footer>
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-12 pl-4 pl-md-0">
                    <h3>{{__('data.structure')}}</h3>
                    <ul>
                        <li><a href="#">{{__('data.structures.general-information')}}</a></li>
                        <li><a href="#">{{__('data.structures.university-regulations')}}</a></li>
                        <li><a href="#">{{__('data.structures.director-congratulations')}}</a></li>
                        <li><a href="#">{{__('data.structures.leadership')}}</a></li>
                        <li><a href="#">{{__('data.structures.faculties')}}</a></li>
                        <li><a href="#">{{__('data.structures.departments')}}</a></li>
                        <li><a href="#">{{__('data.structures.centres-and-departments')}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 pl-4 pl-md-0">
                    <h3>{{__('data.activity')}}</h3>
                    <ul>
                        <li><a href="#">{{__('data.activities.scientific')}}</a></li>
                        <li><a href="#">{{__('data.activities.international')}}</a></li>
                        <li><a href="#">{{__('data.activities.financial')}}</a></li>
                        <li><a href="#">{{__('data.activities.cultural-educational')}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 pl-4 pl-md-0">
                    <h3>{{__('data.our-address')}}</h3>
                    <ul>
                        <li>{!! __('data.adress') !!}
                        </li>
                        <li><a href="mailto:info@samtuit.uz">info@samtuit.uz</a></li>
                        <li><a href="tel:+998 (66) 232 2929">+998 (66) 232 2929</a></li>
                        <li>18, 31, 37, 45, 51, 52, 60</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 pl-4 pl-md-0">
                    <h3>{{__('data.map')}}</h3>
                    <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1773.860846388476!2d66.98123068663902!3d39.67934908334424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d188e87ff9341%3A0xc519336839ee6ba7!2zVEFUVSBTYW1hcmthbmQsIFNhbWFycWFuZCwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1624598540989!5m2!1sru!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-12 py-3 bottom">
                    <p class="m-0">&copy; Copyright 2021 | Kuvondikoff, Sultonov</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script>
    window.onscroll = function () {
        if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            scrollToTopBtn.classList.add("showBtn");
        } else {
            scrollToTopBtn.classList.remove("showBtn")
        }
    }

    var scrollToTopBtn = document.querySelector(".scrollToTopBtn")
    var rootElement = document.documentElement


    function scrollToTop() {
        // Scroll to top logic
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    }
    scrollToTopBtn.addEventListener("click", scrollToTop)

</script>
<script src="{{asset('frontend/js/jQuery.js')}}"></script>
<script src="{{asset('frontend/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/counterUp.js')}}"></script>
<script src="{{asset('frontend/js/app.js')}}"></script>

@yield('scripts')

</body>
</html>
