<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('data.site-title') }}</title>
    <link rel="shortcut icon" href="{{ asset('frontend/img/Logo/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/style/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style/slick.css') }}">

</head>




<body>
    <!-- Main page -->
    <div class="container-fluit">
        <div class="loading">
            <img width="70px" src="{{ asset('frontend/img/Logo/Logo.png') }}" alt="logo">
            <div class="loader mt-4">
                <div>
                    <ul>
                        <li>
                            <svg viewBox="0 0 90 120" fill="currentColor">
                                <path
                                    d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg viewBox="0 0 90 120" fill="currentColor">
                                <path
                                    d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg viewBox="0 0 90 120" fill="currentColor">
                                <path
                                    d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg viewBox="0 0 90 120" fill="currentColor">
                                <path
                                    d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg viewBox="0 0 90 120" fill="currentColor">
                                <path
                                    d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <svg viewBox="0 0 90 120" fill="currentColor">
                                <path
                                    d="M90,0 L90,120 L11,120 C4.92486775,120 0,115.075132 0,109 L0,11 C0,4.92486775 4.92486775,0 11,0 L90,0 Z M71.5,81 L18.5,81 C17.1192881,81 16,82.1192881 16,83.5 C16,84.8254834 17.0315359,85.9100387 18.3356243,85.9946823 L18.5,86 L71.5,86 C72.8807119,86 74,84.8807119 74,83.5 C74,82.1745166 72.9684641,81.0899613 71.6643757,81.0053177 L71.5,81 Z M71.5,57 L18.5,57 C17.1192881,57 16,58.1192881 16,59.5 C16,60.8254834 17.0315359,61.9100387 18.3356243,61.9946823 L18.5,62 L71.5,62 C72.8807119,62 74,60.8807119 74,59.5 C74,58.1192881 72.8807119,57 71.5,57 Z M71.5,33 L18.5,33 C17.1192881,33 16,34.1192881 16,35.5 C16,36.8254834 17.0315359,37.9100387 18.3356243,37.9946823 L18.5,38 L71.5,38 C72.8807119,38 74,36.8807119 74,35.5 C74,34.1192881 72.8807119,33 71.5,33 Z">
                                </path>
                            </svg>
                        </li>
                    </ul>
                </div>
                <span>Loading</span>
            </div>
        </div>
        <!-- Header  -->
        <div class="top">
            <nav>
                <div class="p-0 d-flex justify-content-between align-items-center m-0 px-4">
                    <ul class="m-0 d-flex justify-content-between align-items-center topbar">
                        <li>
                            <a href="/page/gerb-13-02-2023">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Emblem_of_Uzbekistan.svg/200px-Emblem_of_Uzbekistan.svg.png"
                                    alt="111">
                            </a>
                        </li>
                        <li>
                            <a href="/page/bayroq-13-02-2023">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Uzbekistan.svg/330px-Flag_of_Uzbekistan.svg.png"
                                    alt="111">
                            </a>
                        </li>
                        <li>
                            <a href="/page/madhiya-13-02-2023">
                                <img src="https://www.samdu.uz/images/anthem.png" alt="111">
                            </a>
                        </li>
                    </ul>
                    <ul class="d-flex justify-content-between align-items-center m-0">
                        <li class="p-2"><a href="https://student.samduuf.uz/">Hemis student</a></li>
                        <li class="p-2"><a href="https://hemis.samduuf.uz/">Hemis OTM</a></li>
                        <li class="p-2">
                            <div class="dropdown">
                                <button class="btn p-0 btn-sm btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ config('app.locale_names.' . request()->segment(1)) }}
                                </button>
                                <ul class="dropdown-menu">
                                    @php
                                        $urn = str_replace('/' . request()->segment(1), '', request()->getPathInfo());
                                    @endphp
                                    @foreach (config('app.locale_names') as $index => $value)
                                        @if ($index != request()->segment(1))
                                            <li>
                                                @if ($value == "O'zbek")
                                                    <a class="dropdown-item border-bottom"
                                                        href="/{{ $index }}{{ $urn }}"> <img
                                                            width="20px" src="{{ asset('frontend/img/icon/uz.svg') }}"
                                                            alt="111"> {{ $value }}</a>
                                                @endif
                                                @if ($value == 'Русский')
                                                    <a class="dropdown-item border-bottom"
                                                        href="/{{ $index }}{{ $urn }}"> <img
                                                            width="20px"
                                                            src="{{ asset('frontend/img/icon/ru.svg') }}"
                                                            alt="111"> {{ $value }}</a>
                                                @endif
                                                @if ($value == 'English')
                                                    <a class="dropdown-item border-bottom"
                                                        href="/{{ $index }}{{ $urn }}"> <img
                                                            width="20px"
                                                            src="{{ asset('frontend/img/icon/gb.svg') }}"
                                                            alt="111">{{ $value }}</a>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <header id="navbar" class="header">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container-fluid justify-content-between">
                    <a class="navbar-brand p-0 d-flex align-items-center" href="/">
                        <img width="70px" src="{{ asset('frontend/img/Logo/Logo.png') }}" alt="logo">
                        <h2 class="d-none d-lg-block mb-0 ">
                            <p class="mb-0 ms-2 ">{{ __('data.site-title') }}</p>
                        </h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                            @foreach ($menus as $menu)
                                <li class="nav-item">
                                    @if ($menu['children'])
                                        <a class="nav-link"
                                            href="{{ $menu['children'] ? '#' : $menu['link'] }}">{{ $menu['title'] }}
                                            <svg width="15px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path
                                                    d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                            </svg>
                                        </a>
                                        <ul class="drop-down px-0 py-2">
                                            @if ($menu['hasDouble'])
                                                @foreach ($menu['children'] as $childs)
                                                    <li class="px-3">
                                                        @if (!$childs['children'])
                                                            <a class="drop-down-link" href="{{ $childs['link'] }}">
                                                                {{ $childs['title'] }} </a>
                                                        @else
                                                            <a class="drop-down-link"
                                                                href="#">{{ $childs['title'] }} <svg
                                                                    class="ms-1" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 320 512">
                                                                    <path
                                                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                                                </svg></a>
                                                        @endif
                                                        <ul class="deep-drop-down px-3 py-2">
                                                            @if ($childs['children'])
                                                                @foreach ($childs['children'] as $new)
                                                                    <li>
                                                                        <a
                                                                            href="{{ $new['link'] }}">{{ $new['title'] }}</a>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            @else
                                                @if ($menu['children'])
                                                    @foreach ($menu['children'] as $childs)
                                                        <li class="px-3"><a
                                                                href="{{ $childs['link'] }}">{{ $childs['title'] }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </ul>
                                    @else
                                        <a class="nav-link"
                                            href="{{ $menu['children'] ? '#' : $menu['link'] }}">{{ $menu['title'] }}</a>
                                    @endif
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!-- Header end -->
        <header id="top-navbar" class="header w-100">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid justify-content-between">
                    <a class="navbar-brand p-0 d-flex align-items-center" href="/">
                        <img width="70px" src="{{ asset('frontend/img/Logo/Logo.png') }}" alt="logo">
                        <h2 class="d-none d-lg-block mb-0 ">
                            <p class="mb-0 ms-2 ">{{ __('data.site-title') }}</p>
                        </h2>
                    </a>
                    <button id="callapse" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                            @foreach ($menus as $menu)
                                <li class="nav-item">
                                    @if ($menu['children'])
                                        <a class="nav-link"
                                            href="{{ $menu['children'] ? '#' : $menu['link'] }}">{{ $menu['title'] }}
                                            <svg width="15px" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path
                                                    d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                            </svg>
                                        </a>
                                        <ul class="drop-down px-0 py-2">
                                            @if ($menu['hasDouble'])
                                                @foreach ($menu['children'] as $childs)
                                                    <li class="px-3">
                                                        @if (!$childs['children'])
                                                            <a class="drop-down-link" href="{{ $childs['link'] }}">
                                                                {{ $childs['title'] }} </a>
                                                        @else
                                                            <a class="drop-down-link"
                                                                href="#">{{ $childs['title'] }} <svg
                                                                    class="ms-1" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 320 512">
                                                                    <path
                                                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                                                                </svg></a>
                                                        @endif
                                                        <ul class="deep-drop-down px-3 py-2">
                                                            @if ($childs['children'])
                                                                @foreach ($childs['children'] as $new)
                                                                    <li>
                                                                        <a
                                                                            href="{{ $new['link'] }}">{{ $new['title'] }}</a>
                                                                    </li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            @else
                                                @if ($menu['children'])
                                                    @foreach ($menu['children'] as $childs)
                                                        <li class="px-3"><a
                                                                href="{{ $childs['link'] }}">{{ $childs['title'] }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            @endif
                                        </ul>
                                    @else
                                        <a class="nav-link"
                                            href="{{ $menu['children'] ? '#' : $menu['link'] }}">{{ $menu['title'] }}</a>
                                    @endif
                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>
        </header><!-- Header end -->
        @yield('content')
        <button class="scrollToTopBtn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path
                    d="M178.3 5.7L40.3 143.7C35 149 32 156.2 32 163.7C32 179.3 44.7 192 60.3 192H144V400c0 8.8-7.2 16-16 16H32c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96c61.9 0 112-50.1 112-112V192h83.7c15.6 0 28.3-12.7 28.3-28.3c0-7.5-3-14.7-8.3-20L205.7 5.7C202 2 197.1 0 192 0s-10 2-13.7 5.7z" />
            </svg></button>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-card">
                            <h2 class="footer-title">Map</h2>
                            <div style="position:relative;overflow:hidden; margin-top:30px">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2223.253237374265!2d67.17895302981071!3d39.42076785403022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4cc57a7ebf9d1d%3A0x2faeb12ed195b8b8!2sKamongaron%20Kasb%20Hunar%20Kolleji!5e1!3m2!1sen!2s!4v1670501900630!5m2!1sen!2s"
                                    width="400" height="300" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-card">
                            <h2 class="footer-title">We are on social media</h2>
                            <ul class="footer-links">
                                <li><a data-turbo="true" href="https://t.me/samdu_urgut_filial"><i
                                            class="footer-icons"><svg width="33" height="33"
                                                viewBox="0 0 33 33" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M33 16.5C33 20.8761 31.2616 25.0729 28.1673 28.1673C25.0729 31.2616 20.8761 33 16.5 33C12.1239 33 7.92709 31.2616 4.83274 28.1673C1.73839 25.0729 0 20.8761 0 16.5C0 12.1239 1.73839 7.92709 4.83274 4.83274C7.92709 1.73839 12.1239 0 16.5 0C20.8761 0 25.0729 1.73839 28.1673 4.83274C31.2616 7.92709 33 12.1239 33 16.5ZM17.0919 12.1811C15.4873 12.8494 12.2781 14.2312 7.46831 16.3267C6.68869 16.6361 6.27825 16.9414 6.24113 17.2384C6.17925 17.7396 6.80831 17.9376 7.66425 18.2078L8.02519 18.3212C8.86669 18.5955 10.0011 18.9152 10.5889 18.9276C11.1251 18.9399 11.7212 18.7213 12.3791 18.2676C16.8733 15.2336 19.1936 13.7012 19.338 13.6682C19.4411 13.6434 19.5855 13.6146 19.6804 13.7012C19.7773 13.7858 19.767 13.9487 19.7567 13.992C19.6948 14.2581 17.226 16.5516 15.9493 17.7396C15.5512 18.1108 15.2687 18.3728 15.2109 18.4326C15.0838 18.5625 14.9545 18.6904 14.8232 18.8162C14.0394 19.5711 13.4537 20.1362 14.8541 21.0602C15.5286 21.5057 16.0689 21.8707 16.6073 22.2379C17.193 22.638 17.7787 23.0361 18.5378 23.5352C18.7296 23.6589 18.9152 23.793 19.0946 23.9209C19.7773 24.4076 20.394 24.8449 21.1509 24.7747C21.5923 24.7335 22.0481 24.321 22.2791 23.0835C22.8257 20.1609 23.9002 13.8311 24.1478 11.2221C24.1629 11.0052 24.1539 10.7873 24.1209 10.5724C24.1015 10.399 24.0176 10.2392 23.8858 10.1248C23.6981 9.99527 23.4744 9.92815 23.2464 9.933C22.6277 9.94331 21.6727 10.2754 17.0919 12.1811Z"
                                                    fill="currentColor" />
                                            </svg></i>
                                        Telegram</a></li>
                                <li><a data-turbo="true" href="https://www.facebook.com/samduufeduuz"><i
                                            class="footer-icons"><svg width="33" height="33"
                                                viewBox="0 0 33 33" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M32.9999 16.6012C32.9999 7.4313 25.6121 -0.00195312 16.4999 -0.00195312C7.38369 0.000109375 -0.00418091 7.4313 -0.00418091 16.6032C-0.00418091 24.8883 6.03069 31.7564 13.9177 33.0022V21.4006H9.73082V16.6032H13.9218V12.9423C13.9218 8.78223 16.3865 6.48461 20.1547 6.48461C21.9614 6.48461 23.8486 6.80842 23.8486 6.80842V10.8922H21.7676C19.7195 10.8922 19.0801 12.173 19.0801 13.4868V16.6012H23.6548L22.9246 21.3985H19.0781V33.0001C26.9651 31.7544 32.9999 24.8862 32.9999 16.6012Z"
                                                    fill="currentColor" />
                                            </svg></i> Facebook</a></li>
                                <li><a data-turbo="true" href="https://www.instagram.com/samduufeduuz/"><i
                                            class="footer-icons"><svg width="31" height="30"
                                                viewBox="0 0 31 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.5 0C11.2937 0 10.7647 0.0186 9.11206 0.08928C7.45938 0.16368 6.33369 0.41292 5.3475 0.7812C4.31306 1.15472 3.37608 1.74064 2.60206 2.49798C1.81365 3.24141 1.2034 4.14081 0.81375 5.1336C0.430125 6.07848 0.168563 7.161 0.093 8.742C0.019375 10.3323 0 10.8382 0 14.8819C0 18.9218 0.019375 19.4277 0.093 21.0143C0.1705 22.599 0.430125 23.6797 0.81375 24.6264C1.21094 25.6048 1.73988 26.4343 2.60206 27.262C3.46231 28.0897 4.32644 28.5994 5.34556 28.9788C6.33369 29.3471 7.45744 29.5982 9.10819 29.6707C10.7628 29.7414 11.2898 29.76 15.5 29.76C19.7102 29.76 20.2353 29.7414 21.8899 29.6707C23.5387 29.5963 24.6683 29.3471 25.6544 28.9788C26.6882 28.6051 27.6245 28.0192 28.3979 27.262C29.2601 26.4343 29.7891 25.6048 30.1863 24.6264C30.5679 23.6797 30.8295 22.599 30.907 21.0143C30.9806 19.4277 31 18.9218 31 14.88C31 10.8382 30.9806 10.3323 30.907 8.74386C30.8295 7.161 30.5679 6.07848 30.1863 5.1336C29.7967 4.14078 29.1864 3.24138 28.3979 2.49798C27.6242 1.74036 26.6871 1.1544 25.6525 0.7812C24.6644 0.41292 23.5368 0.16182 21.8879 0.08928C20.2333 0.0186 19.7083 0 15.4961 0H15.5019H15.5ZM14.1108 2.68212H15.5019C19.6404 2.68212 20.1306 2.69514 21.7639 2.76768C23.2752 2.83278 24.0967 3.07644 24.6431 3.27918C25.3658 3.54888 25.8831 3.87252 26.4256 4.39332C26.9681 4.91412 27.3033 5.40888 27.5842 6.10452C27.7973 6.62718 28.0492 7.41582 28.117 8.86662C28.1926 10.4346 28.2081 10.9052 28.2081 14.8763C28.2081 18.8474 28.1926 19.3198 28.117 20.8878C28.0492 22.3386 27.7954 23.1254 27.5842 23.6499C27.3357 24.296 26.9391 24.8802 26.4236 25.3592C25.8811 25.88 25.3658 26.2018 24.6411 26.4715C24.0986 26.6761 23.2771 26.9179 21.7639 26.9849C20.1306 27.0556 19.6404 27.0723 15.5019 27.0723C11.3634 27.0723 10.8713 27.0556 9.238 26.9849C7.72675 26.9179 6.90719 26.6761 6.36081 26.4715C5.68753 26.2333 5.07843 25.8532 4.57831 25.3592C4.06245 24.8794 3.66521 24.2947 3.41581 23.648C3.20462 23.1254 2.95081 22.3367 2.883 20.8859C2.80938 19.318 2.79387 18.8474 2.79387 14.8726C2.79387 10.8996 2.80938 10.4309 2.883 8.8629C2.95275 7.4121 3.20463 6.62346 3.41775 6.09894C3.69869 5.40516 4.03581 4.90854 4.57831 4.38774C5.12081 3.86694 5.63619 3.54516 6.36081 3.27546C6.90719 3.07086 7.72675 2.82906 9.238 2.7621C10.6679 2.69886 11.222 2.68026 14.1108 2.6784V2.68212ZM23.7751 5.1522C23.5308 5.1522 23.2889 5.19839 23.0633 5.28812C22.8376 5.37786 22.6326 5.50938 22.4598 5.67519C22.2871 5.841 22.1501 6.03784 22.0566 6.25448C21.9632 6.47112 21.9151 6.70331 21.9151 6.9378C21.9151 7.17229 21.9632 7.40448 22.0566 7.62112C22.1501 7.83776 22.2871 8.0346 22.4598 8.20041C22.6326 8.36622 22.8376 8.49774 23.0633 8.58748C23.2889 8.67721 23.5308 8.7234 23.7751 8.7234C24.2684 8.7234 24.7415 8.53527 25.0903 8.20041C25.4391 7.86554 25.6351 7.41137 25.6351 6.9378C25.6351 6.46423 25.4391 6.01005 25.0903 5.67519C24.7415 5.34033 24.2684 5.1522 23.7751 5.1522ZM15.5019 7.23912C14.4461 7.22331 13.3976 7.40928 12.4174 7.78622C11.4372 8.16316 10.5449 8.72353 9.79242 9.43471C9.03996 10.1459 8.44239 10.9937 8.0345 11.9287C7.62662 12.8637 7.41656 13.8672 7.41656 14.8809C7.41656 15.8946 7.62662 16.8982 8.0345 17.8332C8.44239 18.7682 9.03996 19.616 9.79242 20.3272C10.5449 21.0383 11.4372 21.5987 12.4174 21.9756C13.3976 22.3526 14.4461 22.5386 15.5019 22.5227C17.5916 22.4914 19.5847 21.6726 21.0509 20.2428C22.5171 18.8131 23.3389 16.8873 23.3389 14.8809C23.3389 12.8746 22.5171 10.9487 21.0509 9.51901C19.5847 8.0893 17.5916 7.27042 15.5019 7.23912ZM15.5019 9.91938C16.8724 9.91938 18.1867 10.442 19.1558 11.3723C20.1248 12.3026 20.6693 13.5644 20.6693 14.88C20.6693 16.1956 20.1248 17.4574 19.1558 18.3877C18.1867 19.318 16.8724 19.8406 15.5019 19.8406C14.1315 19.8406 12.8172 19.318 11.8481 18.3877C10.879 17.4574 10.3346 16.1956 10.3346 14.88C10.3346 13.5644 10.879 12.3026 11.8481 11.3723C12.8172 10.442 14.1315 9.91938 15.5019 9.91938Z"
                                                    fill="currentColor" />
                                            </svg></i> Instagram</a></li>
                                <li><a data-turbo="true" href="https://www.youtube.com/@samduufeducation7037"><i
                                            class="footer-icons"><svg width="33" height="24"
                                                viewBox="0 0 33 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.6052 0.123047H16.7888C18.4841 0.129234 27.0744 0.19111 29.3906 0.813985C30.0908 1.00408 30.7289 1.37462 31.241 1.88856C31.7532 2.40251 32.1214 3.04186 32.3091 3.74273C32.5174 4.52648 32.6638 5.56392 32.7628 6.63436L32.7834 6.84886L32.8288 7.38511L32.8453 7.59961C32.9794 9.48473 32.9959 11.2502 32.9979 11.6359V11.7906C32.9959 12.1907 32.9773 14.0759 32.8288 16.0394L32.8123 16.2559L32.7938 16.4704C32.6906 17.6502 32.538 18.8217 32.3091 19.6838C32.122 20.3849 31.7539 21.0246 31.2417 21.5386C30.7295 22.0527 30.0911 22.423 29.3906 22.6125C26.9981 23.256 17.9046 23.3014 16.6444 23.3035H16.3515C15.7142 23.3035 13.0783 23.2911 10.3146 23.1962L9.96394 23.1839L9.7845 23.1756L9.43181 23.1612L9.07912 23.1467C6.78975 23.0457 4.60969 22.8827 3.60525 22.6105C2.90501 22.4211 2.26682 22.0511 1.75462 21.5374C1.24242 21.0238 0.874184 20.3846 0.686813 19.6838C0.457875 18.8237 0.30525 17.6502 0.202125 16.4704L0.185625 16.2539L0.169125 16.0394C0.0673357 14.6418 0.010931 13.2413 0 11.8401L0 11.5864C0.004125 11.143 0.020625 9.61055 0.132 7.9193L0.146438 7.70686L0.152625 7.59961L0.169125 7.38511L0.2145 6.84886L0.235125 6.63436C0.334125 5.56392 0.480562 4.52442 0.688875 3.74273C0.875931 3.04158 1.24402 2.40193 1.75625 1.88789C2.26847 1.37386 2.90682 1.00351 3.60731 0.813985C4.61175 0.54586 6.79181 0.380859 9.08119 0.277734L9.43181 0.263297L9.78656 0.250922L9.96394 0.244735L10.3166 0.230297C12.2795 0.167132 14.2432 0.132066 16.2071 0.125109H16.6052V0.123047ZM13.2 6.74367V16.6808L21.7738 11.7143L13.2 6.74367Z"
                                                    fill="currentColor" />
                                            </svg></i> Youtube</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-card">
                            <h2 class="footer-title">Our address</h2>
                            <ul class="footer-links">
                                <li><a data-turbo="true"
                                        href="https://goo.gl/maps/fYoEcgAB1pdNNuRt8?coh=178572&entry=tt"><i
                                            class="footer-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                                <path
                                                    d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg></i>Samarqand vil Urgut tumani Vag'ashti MFY 13-uy</a></li>
                                <li><a data-turbo="true" href="tel:998 93 358 28 48"><i class="footer-icons"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg></i> +998 93 358 28 48</a></li>
                                <li><a data-turbo="true" href="mailto:iislomjonisomiddinov@gmail.com"><i
                                            class="footer-icons"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" fill="currentColor"
                                                class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                            </svg></i>diislomjonisomiddinov@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 footer-line"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 text-copyright">© Samarkand State University Urgut
                        Branch,<br> When
                        using the
                        materials of the site in full or in part, it is mandatory to indicate this source.<br>Attention!
                        If
                        you find an error in the text, select it and press Ctrl + Enter to notify the administration
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="counters">

                            <div class="visitor-counter">
                                <a data-turbo="true" href="http://www.uz/ru/res/visitor/index?id=1839"
                                    target="_top">
                                    <img src="https://cnt0.www.uz/counter/collect?id=1839&amp;r=https%3A//developers.google.com/&amp;pg=http%3A//samdu.uz&amp;c=Y&amp;j=N&amp;wh=1536x864&amp;px=24&amp;js=1.3&amp;col=0063AF&amp;t=ffffff&amp;p=E6850F"
                                        width="88" height="31" alt="Топ рейтинг www.uz">
                                </a>
                            </div>
                            <div class="visitor-counter">
                                <!-- Rating Mail.ru logo -->
                                <a href="https://top.mail.ru/jump?from=3226378">
                                    <img src="https://top-fwz1.mail.ru/counter?id=3226378;t=433;l=1" style="border:0;"
                                        height="31" width="88" alt="Top.Mail.Ru" />
                                </a>
                                <!-- //Rating Mail.ru logo -->
                            </div>
                            <div class="visitor-counter">
                                <!-- Yandex.Metrika informer -->
                                <a href="https://metrika.yandex.ru/stat/?id=86699138&amp;from=informer"
                                    target="_blank" rel="nofollow"><img
                                        src="https://informer.yandex.ru/informer/86699138/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                        style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                                        title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                                        class="ym-advanced-informer" data-cid="86699138" data-lang="ru" /></a>
                                <!-- /Yandex.Metrika informer -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- <footer class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="logo d-flex mb-4">
                            <img class="d-block me-3" src="{{ asset('frontend/img/Logo/Logo.png') }}"
                                alt="logo">
                            <span><b>{{ __('data.site-title') }}</b></span>
                        </div>
                        <p class="place"><b>{{ __('data.our-address') }}:</b> {{ __('data.adress') }}</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 social">
                        <h4>{{ __('data.socials') }}</h4>
                        <ul class="m-0 p-0">
                            <li>
                                <a class="d-flex align-items-center" href="https://www.facebook.com/samduufeduuz">
                                    <div class="social-icon">
                                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M32.9999 16.6012C32.9999 7.4313 25.6121 -0.00195312 16.4999 -0.00195312C7.38369 0.000109375 -0.00418091 7.4313 -0.00418091 16.6032C-0.00418091 24.8883 6.03069 31.7564 13.9177 33.0022V21.4006H9.73082V16.6032H13.9218V12.9423C13.9218 8.78223 16.3865 6.48461 20.1547 6.48461C21.9614 6.48461 23.8486 6.80842 23.8486 6.80842V10.8922H21.7676C19.7195 10.8922 19.0801 12.173 19.0801 13.4868V16.6012H23.6548L22.9246 21.3985H19.0781V33.0001C26.9651 31.7544 32.9999 24.8862 32.9999 16.6012Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>
                                    <p class="mb-0">Facebook</p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="https://t.me/samdu_urgut_filial">
                                    <div class="social-icon">
                                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M33 16.5C33 20.8761 31.2616 25.0729 28.1673 28.1673C25.0729 31.2616 20.8761 33 16.5 33C12.1239 33 7.92709 31.2616 4.83274 28.1673C1.73839 25.0729 0 20.8761 0 16.5C0 12.1239 1.73839 7.92709 4.83274 4.83274C7.92709 1.73839 12.1239 0 16.5 0C20.8761 0 25.0729 1.73839 28.1673 4.83274C31.2616 7.92709 33 12.1239 33 16.5ZM17.0919 12.1811C15.4873 12.8494 12.2781 14.2312 7.46831 16.3267C6.68869 16.6361 6.27825 16.9414 6.24113 17.2384C6.17925 17.7396 6.80831 17.9376 7.66425 18.2078L8.02519 18.3212C8.86669 18.5955 10.0011 18.9152 10.5889 18.9276C11.1251 18.9399 11.7212 18.7213 12.3791 18.2676C16.8733 15.2336 19.1936 13.7012 19.338 13.6682C19.4411 13.6434 19.5855 13.6146 19.6804 13.7012C19.7773 13.7858 19.767 13.9487 19.7567 13.992C19.6948 14.2581 17.226 16.5516 15.9493 17.7396C15.5512 18.1108 15.2687 18.3728 15.2109 18.4326C15.0838 18.5625 14.9545 18.6904 14.8232 18.8162C14.0394 19.5711 13.4537 20.1362 14.8541 21.0602C15.5286 21.5057 16.0689 21.8707 16.6073 22.2379C17.193 22.638 17.7787 23.0361 18.5378 23.5352C18.7296 23.6589 18.9152 23.793 19.0946 23.9209C19.7773 24.4076 20.394 24.8449 21.1509 24.7747C21.5923 24.7335 22.0481 24.321 22.2791 23.0835C22.8257 20.1609 23.9002 13.8311 24.1478 11.2221C24.1629 11.0052 24.1539 10.7873 24.1209 10.5724C24.1015 10.399 24.0176 10.2392 23.8858 10.1248C23.6981 9.99527 23.4744 9.92815 23.2464 9.933C22.6277 9.94331 21.6727 10.2754 17.0919 12.1811Z"
                                                fill="currentColor" />
                                        </svg>

                                    </div>
                                    <p class="mb-0">Telegram</p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center" href="https://www.instagram.com/samduufeduuz/">
                                    <div class="social-icon">
                                        

                                    </div>
                                    <p class="mb-0">Instagram</p>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center"
                                    href="https://www.youtube.com/@samduufeducation7037">
                                    <div class="social-icon">
                                        <svg width="33" height="24" viewBox="0 0 33 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.6052 0.123047H16.7888C18.4841 0.129234 27.0744 0.19111 29.3906 0.813985C30.0908 1.00408 30.7289 1.37462 31.241 1.88856C31.7532 2.40251 32.1214 3.04186 32.3091 3.74273C32.5174 4.52648 32.6638 5.56392 32.7628 6.63436L32.7834 6.84886L32.8288 7.38511L32.8453 7.59961C32.9794 9.48473 32.9959 11.2502 32.9979 11.6359V11.7906C32.9959 12.1907 32.9773 14.0759 32.8288 16.0394L32.8123 16.2559L32.7938 16.4704C32.6906 17.6502 32.538 18.8217 32.3091 19.6838C32.122 20.3849 31.7539 21.0246 31.2417 21.5386C30.7295 22.0527 30.0911 22.423 29.3906 22.6125C26.9981 23.256 17.9046 23.3014 16.6444 23.3035H16.3515C15.7142 23.3035 13.0783 23.2911 10.3146 23.1962L9.96394 23.1839L9.7845 23.1756L9.43181 23.1612L9.07912 23.1467C6.78975 23.0457 4.60969 22.8827 3.60525 22.6105C2.90501 22.4211 2.26682 22.0511 1.75462 21.5374C1.24242 21.0238 0.874184 20.3846 0.686813 19.6838C0.457875 18.8237 0.30525 17.6502 0.202125 16.4704L0.185625 16.2539L0.169125 16.0394C0.0673357 14.6418 0.010931 13.2413 0 11.8401L0 11.5864C0.004125 11.143 0.020625 9.61055 0.132 7.9193L0.146438 7.70686L0.152625 7.59961L0.169125 7.38511L0.2145 6.84886L0.235125 6.63436C0.334125 5.56392 0.480562 4.52442 0.688875 3.74273C0.875931 3.04158 1.24402 2.40193 1.75625 1.88789C2.26847 1.37386 2.90682 1.00351 3.60731 0.813985C4.61175 0.54586 6.79181 0.380859 9.08119 0.277734L9.43181 0.263297L9.78656 0.250922L9.96394 0.244735L10.3166 0.230297C12.2795 0.167132 14.2432 0.132066 16.2071 0.125109H16.6052V0.123047ZM13.2 6.74367V16.6808L21.7738 11.7143L13.2 6.74367Z"
                                                fill="currentColor" />
                                        </svg>

                                    </div>
                                    <p class="mb-0">YouTube</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <h5>{{ __('data.map') }}</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2223.253237374265!2d67.17895302981071!3d39.42076785403022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4cc57a7ebf9d1d%3A0x2faeb12ed195b8b8!2sKamongaron%20Kasb%20Hunar%20Kolleji!5e1!3m2!1sen!2s!4v1670501900630!5m2!1sen!2s"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>
    <script>
        window.onscroll = function() {
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
        scrollToTopBtn.addEventListener("click", scrollToTop);
    </script>

    <noscript>
        <div><img src="https://mc.yandex.ru/watch/91968655" style="position:absolute; left:-9999px;"
                alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <script>
        function removePreLoader() {
            document.querySelector(".loading").style.display = "none"
        }
        window.addEventListener("load", () => {
            removePreLoader()
        });
    </script>
    <script src="{{ asset('frontend/js/jQuery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/counterUp.js') }}"></script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>

    @yield('scripts')

</body>

</html>
