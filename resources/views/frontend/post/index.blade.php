@extends('frontend.layouts.main')

@section('content')
    <div class="top-head">
        <h2 class="title text-center m-0"><span>{{$post->type == 1 ? __('data.news') : __('data.annuncements') }}</span></h2>
    </div>

    <main class="container one-news mt-4">
        <div class="row">
            <section class="col-lg-12 mt-3">
                <div class="row faster-news">
                    <nav>
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="/">{{__('data.home')}}</a></li>
                            <li class="breadcrumb-item"><a href="/{{$locale}}{{  $post->type == 1 ? '/post-news' : '/post-ads' }}">{{$post->type == 1 ? __('data.news') : __('data.annuncements') }}</a></li>
                            <li class="breadcrumb-item active">{{$post->{'title_' . $locale} }}</li>
                        </ol>
                    </nav>
                    <section class="col-12 col-lg-9">
                        <h1>{{$post->{'title_' . $locale} }}</h1>
                        <p class="show-data"><span>{{ \App\Services\PostService::dateFormat($post->date,$locale) }} / {{__('data.seen')}} {{$postViews[$post->id]}}</span></p>
        
                        <p> {!!  $post->{'content_' . $locale} !!} </p>
                        </section>

                        <section class="d-lg-block d-none mt-5 col-lg-3">
                            <h4 class="text-center mb-4">{{ __('data.latest-news') }}</h4>
                            @if ($globalNews)
                            @foreach ($globalNews as $globalNew)
                            <div class="border-bottom" >
                                <a href="/post/{{ $globalNew->slug }}" class="card-link ps-2 ">
                                    <p class="faster-news-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-event-fill" viewBox="0 0 16 16">
                                            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5"/>
                                        </svg>
                                      {{ $globalNew->{'date'} }} 
                                    </p>
                                    <p class="faster-news-title">{{ $globalNew->{'title_' . $locale} }}</p>
                                </a>
                            </div>
                            @endforeach
                        @endif
                        </section>
                    </section>
                </div>
                
        </div>
    </main>
    <br>
    <br>
@endsection
