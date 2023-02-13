@extends('frontend.layouts.main')
@section('content')
<div class="container py-3">
    <h1 class="text-center my-4">Ramlar gelleriyasi</h1>
    <div class="image-gallery ">
        <div class="row">
            @foreach($photos as $photo)
                <div class="col-12 col-md-6 col-lg-4">
                    <article class="article mb-3">
                        <figure class="article__figure">
                            <img class="article__cover" src="{{$photo->image_path}}"/>
                            <figcaption class="article__caption">
                            <h5 class="article__title">{{ $photo->{'desc_uz'} }}</h5>
                            <!-- <p class="article__info">{{$photo->date}}</p> -->
                            </figcaption>
                        </figure>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection