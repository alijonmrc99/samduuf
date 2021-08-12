@extends('frontend.layouts.main')

@section('content')
    <main>
        <!-- Slider start -->
        <div class="slider">
            @foreach($banners as $banner)
                <div><img src="/{{$banner->image}}" alt="Slider img"></div>
            @endforeach
        </div><!-- Slider end -->
        <!-- quick menu start -->
        @include('frontend.layouts.quick-menu-site')
        <!-- Quick menu end -->
        <section class="border"></section>
        <!-- News start -->
        <section class="items news" id="newsgsap">
            <div class="container" id="news">
                <h2 class="title"><span>{{__('data.last-news')}}</span></h2>
                <div class="row ">
                    @if($latestFiveNews)
                        @foreach($latestFiveNews as $latestFiveNew)
                            <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0 mb-2 mb-md-0">
                                <div class="card mb-3">
                                    <div class="img-after"><img class="card-img-top"
                                                                src="/{{$latestFiveNew->image}}"
                                                                alt="Card image cap">
                                    </div>
                                    <div class="card-body border">
                                        <h5 class="card-title">{{$latestFiveNew->{'title_'. $locale} }}</h5>
                                        <p class="card-text">{{$latestFiveNew->{'short_content_' . $locale} }}</p>
                                        <div class="card-footer border-0 py-0 px-4 justify-content-between">
                                            <span class="card-data">{{ \App\Services\PostService::dateFormat($latestFiveNew->date,$locale) }} / {{__('data.seen')}} {{$postViews[$latestFiveNew->id]}}</span>
                                            <a href="/post/{{$latestFiveNew->slug}}" class="">{{__('data.read-more')}}...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section><!-- News end -->
        <!-- Announcement start -->
        <section class="items elon" id="elon">
            <div class="container">
                <h2 class="title"><span>{{__('data.annuncements')}}</span></h2>
                <div class="row ">
                    @if($latestFiveAds)
                        @foreach($latestFiveAds as $latestFiveAd)
                            <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-0 mb-2 mb-md-0">
                                <div class="card mb-3">
                                    <div class="img-after"><img class="card-img-top"
                                                                src="/{{$latestFiveAd->image}}"
                                                                alt="Card image cap">
                                    </div>
                                    <div class="card-body border">
                                        <h5 class="card-title">{{$latestFiveAd->{'title_'. $locale} }}</h5>
                                        <p class="card-text">{{$latestFiveAd->{'short_content_' . $locale} }}</p>
                                        <div class="card-footer border-0 py-0 px-4 justify-content-between">
                                            <span class="card-data">{{ \App\Services\PostService::dateFormat($latestFiveAd->date,$locale) }} / {{__('data.seen')}} {{$postViews[$latestFiveAd->id]}}</span>
                                            <a href="/post/{{$latestFiveAd->slug}}" class="">{{__('data.read-more')}}...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section><!-- Announcment end -->
        <!-- Interactive Start -->
        @include('frontend.layouts.interactive')
        <!-- Interactive End -->
        <!-- Statistics Begin -->
        <section class=" items statistics">
            <h3 class="title"><span>{{__('data.statistics')}}</span></h3>
            <div class="bg">
                <div class="container">
                    <div class="row justify-content-around  p-3">
                        <div class="col-lg-2 p-4 col-sm-5 col-12 mb-3 m-lg-00">
                            <div><i class="fa fa-users fw"></i></div>
                            <p>{{__('data.statistic.students')}}</p>
                            <div class="number"><span class="counter">1945</span></div>
                        </div>
                        <div class="col-lg-2 p-4 col-sm-5 col-12 mb-3 m-lg-00">
                            <div><i class="fas fa-user fw"></i></div>
                            <p>{{__('data.statistic.teachers')}}</p>
                            <div class="number"><span class="counter">115</span></div>
                        </div>
                        <div class="col-lg-2 p-4 col-sm-5 col-12 mb-3 m-lg-00">
                            <div><i class="fas fa-graduation-cap fw"></i></div>
                            <p>{{__('data.statistic.alumni')}}</p>
                            <div class="number"><span class="counter">415</span></div>
                        </div>
                        <div class="col-lg-2 p-4 col-sm-5 col-12 mb-3 m-lg-00">
                            <div><i class="fas fa-book fw"></i></div>
                            <p>{{__('data.statistic.book')}}</p>
                            <div class="number"><span class="counter">18610</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Interactive End -->
        <!-- Video start -->
        <section class="items">
            <div class="container">
                <h2 class="title"><span>{{__('data.video-clips')}}</span></h2>
                <div class="row video">
                    <iframe class="col-12" width="100%" height="600" src="https://www.youtube.com/embed/arU--ULY8A4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; clipboard-write; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </section><!-- Video end -->
        <section class="items">
            <div class="container">
                <h2 class="title"><span>{{__('data.useful-sites')}}</span></h2>
                <div class="row usefull">
                    <a class="col" href="https://edu.uz"><img src="/frontend/img/icon/logo_new.png" alt="egov"></a>
                    <a class="col" href="https://lex.uz"><img src="/frontend/img/icon/lexuz.png" alt="egov"></a>
                    <a class="col" href="https://mitc.uz"><img src="/frontend/img/icon/mitc.png" alt="egov"></a>
                    <a class="col" href="https://my.gov.uz"><img src="/frontend/img/icon/mygov.png" alt="egov"></a>
                    <a class="col" href="http://ek.uz/uz/"><img src="/frontend/img/icon/ekomunal.png" alt="egov"></a>
                    <a class="col" href="http://ziyonet.uz"><img src="/frontend/img/icon/ziyonet.png" alt="egov"></a>
                    <a class="col" href="https://e-imzo.uz"><img src="/frontend/img/icon/eimzo.png" alt="egov"></a>
                </div>
            </div>
        </section><!-- Usefull end -->
        <section class="items hamkorlar">
            <div class="container">
                <h2 class="title"><span>{{ __('data.our-partners') }}</span></h2>
                <div class="row ">
                    <div class="col-3"><img src="/frontend/img/icon/huawei.png" alt="huawei"></div>
                    <div class="col-3"><img src="/frontend/img/icon/pochta.png" alt="pochta"></div>
                    <div class="col-3"><img src="/frontend/img/icon/uzinfocom.png" alt="uzinfocom"></div>
                    <div class="col-3"><img src="/frontend/img/icon/aloqabank.png" alt="aloqabank"></div>
                </div>
            </div>
        </section><!-- hamkorlar end -->
    </main>

@endsection




@section('scripts')
    <script !src="">
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
@endsection


