@extends('backend.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-12">
            <div class="row mb-4">
                <div class="col-12 col-xl-6 offset-xl-3">
                    <div class="card redial-border-light redial-shadow mb-4">
                        <div class="card-body">
                            <h6 class="header-title pl-3 redial-relative">Change Account Data</h6>
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->messages() as $error)
                                            <li>
                                                {{$error[0]}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{route('admin.user.settings')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="redial-font-weight-600">*Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email" name="email"
                                           value="{{auth()->user()->email}}"/>
                                </div>
                                <div class="form-group">
                                    <label class="redial-font-weight-600">*Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                           value="{{auth()->user()->name}}"/>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="redial-font-weight-600">New Password</label>
                                            <input type="password" class="form-control" placeholder="New Password"
                                                   name="new-password"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="redial-font-weight-600">Repeat New Password</label>
                                            <input type="password" class="form-control" placeholder="Repeat New Password"
                                                   name="new-password_confirmation"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="redial-font-weight-600">*Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                                    <p style="color: red">To save all data please enter your password!</p>
                                </div>

                                <div class="redial-divider my-4"></div>
                                <button type="submit" class="btn btn-primary btn-xs">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
