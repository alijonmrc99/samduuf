@extends('frontend.layouts.main')

@section('content')
    <div class="top-head">
        <h2 class="title m-0"><span></span></h2>
    </div>

    <main class="container one-news mt-4">
        <div class="row m-0">
            <section class="menu col-lg-2 mt-4 d-none d-lg-block">
                @include('frontend.layouts.quick-menu')
            </section>
            <section class="col-lg-10">
                <nav>
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="/">{{__('data.home')}}</a></li>
                        <li class="breadcrumb-item active">{{$menu->{'title_' . $locale} }} </li>
                    </ol>
                </nav>
                <h1>{{$page->{'short_content_' . $locale} }}</h1>
                <p>
                    {!!  $page->{'content_' . $locale} !!}
                </p>

            </section>

        </div>
    </main>
    <br>
    <br>
@endsection
