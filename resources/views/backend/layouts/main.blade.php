<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.designstream.co.in/redial/style1/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 06:00:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    <link rel="icon" href="dist/images/favicon.ico"/>
    <!--Plugin CSS-->
    <link href="{{asset('backend/css/plugins.min.css')}}" rel="stylesheet">
    <!--main Css-->
    <link href="{{asset('backend/css/main.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>

    <script !src="">
        function inputValidate(input) {
            var length_limit = input.attributes['data-text-limit'].value;
            var value = input.value;
            var length = value.length;
            var output = document.getElementById(input.attributes['data-output-id'].value);
            if (length > length_limit) {
                value = value.substr(0, length_limit);
                input.value = value;
            }
            length = value.length;
            output.innerText = length + " / " + length_limit;
        }
    </script>
</head>
<body>
<!-- header-->
<div id="header-fix" class="header py-4 py-lg-2 fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-3 col-xl-2 align-self-center">
                <div class="site-logo">
                    <a href=""><img src="{{asset('backend/images/logo-v1.png')}}" alt="" class="img-fluid"/></a>
                </div>
                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="navbar-btn bg-transparent float-right">
                        <i class="glyphicon glyphicon-align-left"></i>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-lg-3 align-self-center d-none d-lg-inline-block">
                <form>
                    <div class="form-group mb-0 redial-relative">
                        <input type="text" class="form-control redial-rounded-circle-50 border-0" placeholder="Search"/>
                        <div class="btn-search">
                            <a href="#" class="redial-light"><i
                                    class="lnr lnr-magnifier redial-absolute redial-right-20"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-inline-block">
                <nav class="navbar navbar-expand-lg p-0">
                    <ul class="navbar-nav notification ml-auto d-inline-flex">
                        <li class="nav-item dropdown user-profile align-self-center">
                            <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                                <span class="float-right pl-3 text-white"><i class="fa fa-angle-down"></i></span>
                                <div class="media">
                                    <img src="{{asset('backend/images/user_logo.png')}}" alt=""
                                         class="d-flex mr-3 img-fluid redial-rounded-circle-50" width="45"/>
                                    <div class="media-body align-self-center">
                                        <p class="mb-2 text-white text-uppercase font-weight-bold">{{auth()->user()->name}}</p>
                                        <small class="redial-primary-light font-weight-bold text-white"> Admin </small>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                <li><a class="dropdown-item py-2" href="{{route('admin.user.settings')}}"><i
                                            class="fa fa-cog pr-2"></i> Setting</a>
                                </li>
                                <li><a class="dropdown-item py-2" href="{{route('logout')}}"><i
                                            class="fa fa-sign-out pr-2"></i>
                                        logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End header-->

<!-- Main-content Top bar-->
<div class="redial-relative mt-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2 align-self-center my-3 my-lg-0">
                <h6 class="text-uppercase redial-font-weight-700 redial-light mb-0 pl-2">Dashboard</h6>
            </div>
            <div class="col-12 col-md-4 align-self-center">
                <div class="float-sm-left float-none mb-4 mb-sm-0">
                    <ol class="breadcrumb mb-0 bg-transparent redial-light">
                        <li class="breadcrumb-item"><a href="#" class="redial-light">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="clearfix d-none d-md-inline">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main-content Top bar-->

<!-- main-content-->
<div class="wrapper">
    @include('backend.layouts.sidebar')
    <div id="content">
        @if(session()->has('exception-helper'))
            <div class="alert alert-danger alert-dismissible fade show" style="font-size: 20px" role="alert">
                <ul>
                    @foreach(session()->pull('exception-helper') as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @yield('content')
    </div>
</div>
<!-- End main-content-->

<!-- Top To Bottom-->
<a href="#" class="scrollup text-center redial-bg-primary redial-rounded-circle-50 ">
    <h4 class="text-white mb-0"><i class="icofont icofont-long-arrow-up"></i></h4>
</a>
<!-- End Top To Bottom-->


<!-- jQuery -->
<script src="{{asset('backend/js/plugins.min.js')}}"></script>

<script src="{{asset('backend/js/common.js')}}"></script>
@yield('scripts')
</body>

<!-- Mirrored from html.designstream.co.in/redial/style1/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 06:03:56 GMT -->
</html>
