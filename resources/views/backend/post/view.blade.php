@extends('backend.layouts.main')

@section('content')
    <div class="card redial-border-light redial-shadow mb-4">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">{{$post->title_uz}}</h6>
            <div>
                {!!   $post->content_uz !!}
            </div>
            <h6 class="header-title pl-3 redial-relative">{{$post->title_kuz}}</h6>
            <div>
                {!!   $post->content_kuz !!}
            </div>
            <h6 class="header-title pl-3 redial-relative">{{$post->title_ru}}</h6>
            <div>
                {!!   $post->content_ru !!}
            </div>
            <h6 class="header-title pl-3 redial-relative">{{$post->title_en}}</h6>
            <div>
                {!!   $post->content_en !!}
            </div>
        </div>
    </div>
@endsection

