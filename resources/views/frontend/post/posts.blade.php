@extends('frontend.layouts.main')

@section('content')
    <div class="top-head">
        <h2 class="title m-0"><span>So'nggi yangiliklar</span></h2>
    </div>

    <main>
        <section class="items news" id="newsgsap">
            <div class="container">

                <nav>
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                        <li class="breadcrumb-item active">Yangiliklar</li>
                    </ol>
                </nav>
                <div class="row ">
                    @foreach($posts as $post)
                        <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0 mb-2 mb-md-0">
                            <div class="card mb-3">
                                <div class="img-after"><img class="card-img-top"
                                                            src="/{{$post->image}}"
                                                            alt="Card image cap"></div>
                                <div class="card-body border">
                                    <h5 class="card-title">{{$post->{'title_' . $locale} }}</h5>
                                    <p class="card-text">{{$post->{'short_content_' .  $locale} }}</p>
                                    <div class="card-footer border-0 py-0 px-4 justify-content-between">
                                        <span class="card-data">{{\App\Services\PostService::dateFormat($post->date,$locale)}} / Ko’rildi {{$postViews[$post->id]}}</span>
                                        <a href="/post/{{$post->slug}}" class="">Batafsil...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                    {{$posts->links('pagination::bootstrap-4')}}
                

            </div>
        </section><!-- News end -->
    </main>

@endsection
