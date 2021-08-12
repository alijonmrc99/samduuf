<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.designstream.co.in/redial/style1/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 06:08:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="icon" href="dist/images/favicon.ico"/>

    <!--Plugin CSS-->
    <link href="{{asset('backend/css/plugins.min.css')}}" rel="stylesheet">


    <!--main Css-->
    <link href="{{asset('backend/css/main.min.css')}}" rel="stylesheet">
</head>
<body>

<!-- main-content-->
<div class="wrapper">
    <div class="w-100">
        <div class="row d-flex justify-content-center  pt-5 mt-5">
            <div class="col-12 col-xl-4">
                <div class="card">

                    <div class="card-body text-center">
                        <h4 class="mb-0 redial-font-weight-400">Please Sign In</h4>
                    </div>
                    <div class="redial-divider"></div>
                    <div class="card-body py-4 text-center">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->messages() as $error)
                                        <li> {{$error[0]}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('login')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="E-Mail" name="email" value="{{old('email')}}"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="password" name="password"/>
                            </div>
                            <div class="form-group text-left">
                                <input type="checkbox" id="checkbox11">
                                <label for="checkbox11">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md redial-rounded-circle-50 btn-block">
                                Login
                            </button>
                        </form>
                    </div>

                </div>
                <div class="alert alert-primary text-center">
                    Default(email/password) - <b>admin@samtuit.uz/123456</b>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main-content-->

<!-- jQuery -->
<script src="{{asset('backend/js/plugins.min.js')}}"></script>
<script src="{{asset('backend/js/common.js')}}"></script>
</body>

<!-- Mirrored from html.designstream.co.in/redial/style1/default/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Feb 2021 06:08:38 GMT -->
</html>
