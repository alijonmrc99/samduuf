@extends('backend.layouts.main')
@section('content')

    <div class="card redial-border-light redial-shadow mb-4">
        <img src="dist/images/blog3.jpg" alt="" class="img-fluid rounded-top"/>
        <div class="card-body">
            <ul class="list-inline comment-info redial-font-weight-700">
                <li class="list-inline-item lis-relative mr-3"><i class="fa fa-user pr-1 redial-dark"></i> <a href="#"
                                                                                                              class="redial-primary">
                        {{$contact->surname}} {{$contact->name}}</a></li>
                <li class="list-inline-item lis-relative"><a href="#" class="redial-dark"><i
                            class="fa fa-at pr-1"></i>{{$contact->email}}</a></li>
                <li class="list-inline-item lis-relative"><a href="#" class="redial-dark"><i
                            class="fa fa-clock-o pr-1"></i>{{$contact->created_at}}</a></li>

            </ul>
{{--            <a href="#"><h4>Praesent bibendum eros urn, in mattis est.</h4></a>--}}
            {{$contact->message}}
        </div>
    </div>

@endsection
