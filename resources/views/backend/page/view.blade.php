@extends('backend.layouts.main')

@section('content')
    <div class="card redial-border-light redial-shadow mb-4">
        <div class="card-body">
            <h6 class="header-title pl-3 redial-relative">{{$menu->title_uz}}</h6>
            <div>
                {!! $page->content_uz !!}
            </div>
            <h6 class="header-title pl-3 redial-relative">{{$menu->title_kuz}}</h6>
            <div>
                {!! $page->content_kuz !!}
            </div>
            <h6 class="header-title pl-3 redial-relative">{{$menu->title_ru}}</h6>
            <div>
                {!! $page->content_ru !!}
            </div>
            <h6 class="header-title pl-3 redial-relative">{{$menu->title_en}}</h6>
            <div>
                {!! $page->content_en !!}
            </div>
        </div>
    </div>
@endsection

