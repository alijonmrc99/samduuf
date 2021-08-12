@extends('frontend.layouts.main')

@section('content')
    <div class="top-head">
        <h2 class="title m-0"><span>{{$post->type == 1 ? __('data.news') : __('data.annuncements') }}</span></h2>
    </div>

    <main class="container one-news mt-4">
        <div class="row">
            <section class="menu col-lg-2 mt-4 d-none d-lg-block">
                @include('frontend.layouts.quick-menu')
            </section>





            <section class="col-lg-10">
                <nav>
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="/">{{__('data.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="/{{$locale}}{{  $post->type == 1 ? '/post-news' : '/post-ads' }}">{{$post->type == 1 ? __('data.news') : __('data.annuncements') }}</a></li>
                        <li class="breadcrumb-item active">{{$post->{'title_' . $locale} }}</li>
                    </ol>
                </nav>
                <h1>{{$post->{'title_' . $locale} }}</h1>
                <p> {{ \App\Services\PostService::dateFormat($post->date,$locale) }} / {{__('data.seen')}} {{$postViews[$post->id]}} </p>

                <p> {!!  $post->{'content_' . $locale} !!} </p>
            </section>
        </div>
    </main>
    <br>
    <br>
@endsection
