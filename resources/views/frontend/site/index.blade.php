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
        <!-- News start -->
        <section class="bg-gray">
            <div class="news container py-5 bg-gray" id="news">
                <h2 class="text-center mb-4">{{__('data.last-news')}}</h2>
                <div class="row">
                    @if($latestFiveNews)
                        @foreach($latestFiveNews as $latestFiveNew)
                            <div class="col-12 px-3 mb-2 mb-md-0">
                                <div class="card">
                                    <div class="card-img"><img src="/{{$latestFiveNew->image}}" class="card-img-top"
                                                               alt="card-img-top"></div>
                                    <div class="card-body">
                                        <p class="date-show">
                                            <span
                                                class="date">{{ \App\Services\PostService::dateFormat($latestFiveNew->date,$locale) }}</span>
                                            <span>/ {{__('data.seen')}} {{$postViews[$latestFiveNew->id]}}</span>
                                        </p>
                                        <h5 class="card-title">{{$latestFiveNew->{'title_'. $locale} }}</h5>
                                        <p class="card-text">{{$latestFiveNew->{'short_content_' . $locale} }}</p>
                                        <div class="d-flex justify-content-center">
                                            <a href="/post/{{$latestFiveNew->slug}}"
                                               class="card-link col-6 text-center te py-2 ">Batafsil</a>
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
        <section class="news container py-5" id="elon">
            <h2 class="text-center mb-4">{{__('data.annuncements')}}</h2>
            <div class="row">
                @if($latestFiveAds)
                    @foreach($latestFiveAds as $latestFiveAd)
                        <div class="col-12 px-3 mb-2 mb-md-0">
                            <div class="card">
                                <div class="card-img"><img src="/{{$latestFiveAd->image}}" class="card-img-top"
                                                           alt="card-img-top"></div>
                                <div class="card-body">
                                    <p class="date-show">
                                        <span
                                            class="date">{{ \App\Services\PostService::dateFormat($latestFiveAd->date,$locale) }}</span>
                                        <span>/ {{__('data.seen')}} {{$postViews[$latestFiveAd->id]}}</span>
                                    </p>
                                    <h5 class="card-title">{{$latestFiveAd->{'title_'. $locale} }}</h5>
                                    <p class="card-text">{{$latestFiveAd->{'short_content_' . $locale} }}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="/post/{{$latestFiveAd->slug}}"
                                           class="card-link col-6 text-center te py-2 ">{{__('data.read-more')}}...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section><!-- Announcment end -->
        <!-- Statistics Begin -->
        <section class="bg-gray">
            <div class="container py-5 statistics">
                <h2 class="text-center mb-4">{{__('data.statistics')}}</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3 col-12">
                        <div class="p-4">
                            <p class="statistics-top d-flex align-items-center ">
                                <!-- student icon -->
                                <svg class="me-5" width="86" height="61" viewBox="0 0 86 61" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43 0.3125C41.9116 0.3125 40.8365 0.501172 39.8153 0.865039L2.12312 14.5168C0.846555 14.9885 -6.85779e-06 16.2014 -6.85779e-06 17.5625C-6.85779e-06 18.9236 0.846555 20.1365 2.12312 20.6082L9.90343 23.4248C7.69968 26.9018 6.44999 31.0121 6.44999 35.3381V39.125C6.44999 42.9523 4.99874 46.901 3.45343 50.0141C2.57999 51.766 1.58562 53.491 0.429993 55.0812C-6.85453e-06 55.6607 -0.120944 56.4154 0.120931 57.1027C0.362806 57.79 0.927181 58.3021 1.62593 58.4773L10.2259 60.6336C10.7903 60.7818 11.395 60.674 11.8922 60.3641C12.3894 60.0541 12.7387 59.542 12.8462 58.9625C14.0019 53.1945 13.4241 48.0195 12.5641 44.3135C12.1341 42.3998 11.5562 40.4457 10.75 38.6533V35.3381C10.75 31.2682 12.1206 27.4273 14.4991 24.3547C16.2325 22.2658 18.4766 20.5812 21.1103 19.5436L42.2072 11.2285C43.3091 10.7973 44.5587 11.3363 44.9887 12.4414C45.4187 13.5465 44.8812 14.7998 43.7794 15.2311L22.6825 23.5461C21.0162 24.2064 19.5516 25.2172 18.3556 26.457L39.8019 34.2195C40.8231 34.5834 41.8981 34.7721 42.9865 34.7721C44.075 34.7721 45.15 34.5834 46.1712 34.2195L83.8769 20.6082C85.1534 20.15 86 18.9236 86 17.5625C86 16.2014 85.1534 14.9885 83.8769 14.5168L46.1847 0.865039C45.1634 0.501172 44.0884 0.3125 43 0.3125ZM17.2 50.9844C17.2 55.7416 28.7562 60.6875 43 60.6875C57.2437 60.6875 68.8 55.7416 68.8 50.9844L66.744 31.3895L47.6359 38.3164C46.1444 38.8555 44.5722 39.125 43 39.125C41.4278 39.125 39.8422 38.8555 38.3641 38.3164L19.2559 31.3895L17.2 50.9844Z"
                                        fill="#0EA2BD"/>
                                </svg>
                                <span class="counter">0</span>
                            </p>
                            <p class="statistics-text m-0">{{__('data.statistic.alumni')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 col-12">
                        <div class="p-4">
                            <p class="statistics-top d-flex align-items-center ">
                                <!-- Teacher icon -->
                                <svg class="me-5" width="67" height="65" viewBox="0 0 67 65" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M47.7674 40.7012L33.5 52.8125L19.2326 40.7012C8.53951 41.0947 0 48.5215 0 57.6875V58.9062C0 62.2705 3.2154 65 7.17857 65H59.8214C63.7846 65 67 62.2705 67 58.9062V57.6875C67 48.5215 58.4605 41.0947 47.7674 40.7012ZM2.03393 10.1309L2.99107 10.3213V17.7353C1.9442 18.2686 1.19643 19.1953 1.19643 20.3125C1.19643 21.3789 1.88437 22.2676 2.85647 22.8135L0.523438 30.7227C0.269196 31.5986 0.8375 32.5 1.66004 32.5H7.91138C8.73393 32.5 9.30223 31.5986 9.04799 30.7227L6.71496 22.8135C7.68705 22.2676 8.375 21.3789 8.375 20.3125C8.375 19.1953 7.62723 18.2686 6.58036 17.7353V11.0576L16.4509 13.0762C15.1647 15.2598 14.3571 17.6973 14.3571 20.3125C14.3571 29.2881 22.9266 36.5625 33.5 36.5625C44.0734 36.5625 52.6429 29.2881 52.6429 20.3125C52.6429 17.6973 51.8502 15.2598 50.5491 13.0762L64.9511 10.1309C67.673 9.57227 67.673 6.69043 64.9511 6.13184L36.4761 0.291992C34.5319 -0.101563 32.483 -0.101563 30.5388 0.291992L2.03393 6.11914C-0.672991 6.67773 -0.672991 9.57227 2.03393 10.1309Z"
                                        fill="#0EA2BD"/>
                                </svg>
                                <span class="counter">31</span>
                            </p>
                            <p class="statistics-text m-0">{{__('data.statistic.teachers')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 col-12">
                        <div class="p-4">
                            <p class="statistics-top d-flex align-items-center ">
                                <!-- Users icon -->
                                <svg class="me-5" width="90" height="64" viewBox="0 0 90 64" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5 27.5C18.4641 27.5 22.5 23.4641 22.5 18.5C22.5 13.5359 18.4641 9.5 13.5 9.5C8.53594 9.5 4.5 13.5359 4.5 18.5C4.5 23.4641 8.53594 27.5 13.5 27.5ZM76.5 27.5C81.4641 27.5 85.5 23.4641 85.5 18.5C85.5 13.5359 81.4641 9.5 76.5 9.5C71.5359 9.5 67.5 13.5359 67.5 18.5C67.5 23.4641 71.5359 27.5 76.5 27.5ZM81 32H72C69.525 32 67.2891 32.9984 65.6578 34.6156C71.325 37.7234 75.3469 43.3344 76.2188 50H85.5C87.9891 50 90 47.9891 90 45.5V41C90 36.0359 85.9641 32 81 32ZM45 32C53.7047 32 60.75 24.9547 60.75 16.25C60.75 7.54531 53.7047 0.5 45 0.5C36.2953 0.5 29.25 7.54531 29.25 16.25C29.25 24.9547 36.2953 32 45 32ZM55.8 36.5H54.6328C51.7078 37.9062 48.4594 38.75 45 38.75C41.5406 38.75 38.3063 37.9062 35.3672 36.5H34.2C25.2563 36.5 18 43.7563 18 52.7V56.75C18 60.4766 21.0234 63.5 24.75 63.5H65.25C68.9766 63.5 72 60.4766 72 56.75V52.7C72 43.7563 64.7438 36.5 55.8 36.5ZM24.3422 34.6156C22.7109 32.9984 20.475 32 18 32H9C4.03594 32 0 36.0359 0 41V45.5C0 47.9891 2.01094 50 4.5 50H13.7672C14.6531 43.3344 18.675 37.7234 24.3422 34.6156Z"
                                        fill="#0EA2BD"/>
                                </svg>
                                <span class="counter">519</span>
                            </p>
                            <p class="statistics-text m-0">{{__('data.statistic.students')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 col-12">
                        <div class="p-4">
                            <p class="statistics-top d-flex align-items-center ">
                                <!-- book icon -->
                                <svg class="me-5" width="64" height="73" viewBox="0 0 64 73" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M64 51.3281V3.42188C64 1.52559 62.4714 0 60.5714 0H13.7143C6.14286 0 0 6.13086 0 13.6875V59.3125C0 66.8691 6.14286 73 13.7143 73H60.5714C62.4714 73 64 71.4744 64 69.5781V67.2969C64 66.2275 63.5 65.258 62.7286 64.6307C62.1286 62.435 62.1286 56.1758 62.7286 53.9801C63.5 53.367 64 52.3975 64 51.3281ZM18.2857 19.1055C18.2857 18.635 18.6714 18.25 19.1429 18.25H49.4286C49.9 18.25 50.2857 18.635 50.2857 19.1055V21.957C50.2857 22.4275 49.9 22.8125 49.4286 22.8125H19.1429C18.6714 22.8125 18.2857 22.4275 18.2857 21.957V19.1055ZM18.2857 28.2305C18.2857 27.76 18.6714 27.375 19.1429 27.375H49.4286C49.9 27.375 50.2857 27.76 50.2857 28.2305V31.082C50.2857 31.5525 49.9 31.9375 49.4286 31.9375H19.1429C18.6714 31.9375 18.2857 31.5525 18.2857 31.082V28.2305ZM54.4857 63.875H13.7143C11.1857 63.875 9.14286 61.8361 9.14286 59.3125C9.14286 56.8031 11.2 54.75 13.7143 54.75H54.4857C54.2143 57.1881 54.2143 61.4369 54.4857 63.875Z"
                                        fill="#0EA2BD"/>
                                </svg>
                                <span class="counter">524</span>
                            </p>
                            <p class="statistics-text m-0">{{__('data.statistic.book')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Statistics End -->
        <!-- Video start -->
        <section class="container py-5 position-relative">
            <h2 class="text-center mb-4">{{__('data.video-clips')}}</h2>
            <div class="row justify-content-center">
                <div class="col-8 video">
                    <div class="play-btn-box">
                        <div class="play-button">
                            <svg width="20" height="25" viewBox="0 0 20 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.80208 1.05675C3.03125 0.576869 2.0625 0.561049 1.27604 1.00929C0.489583 1.45753 0 2.30128 0 3.21886V21.7814C0 22.6989 0.489583 23.5427 1.27604 23.9909C2.0625 24.4392 3.03125 24.4181 3.80208 23.9435L18.8021 14.6622C19.5469 14.2034 20 13.386 20 12.5001C20 11.6142 19.5469 10.8021 18.8021 10.338L3.80208 1.05675Z"
                                    fill="black"/>
                            </svg>
                        </div>
                        <div class="play-btn-line1" id="line1">
                            <div class="play-btn-line2" id="line2"></div>
                        </div>
                    </div>
                </div>
                <div class="ifreme-box">
                    <svg class="close-btn" width="57" height="57" viewBox="0 0 57 57" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_54_6)">
                            <path
                                d="M20.4738 22.8833C19.8488 22.2241 19.8488 21.1536 20.4738 20.4944C21.0988 19.8352 22.1138 19.8352 22.7388 20.4944L28.0038 26.0526L33.2738 20.4997C33.8988 19.8405 34.9138 19.8405 35.5388 20.4997C36.1638 21.1588 36.1638 22.2293 35.5388 22.8885L30.2688 28.4415L35.5338 33.9997C36.1588 34.6588 36.1588 35.7293 35.5338 36.3885C34.9088 37.0477 33.8938 37.0477 33.2688 36.3885L28.0038 30.8303L22.7338 36.3833C22.1088 37.0424 21.0938 37.0424 20.4688 36.3833C19.8438 35.7241 19.8438 34.6536 20.4688 33.9944L25.7388 28.4415L20.4738 22.8833Z"
                                fill="white"/>
                        </g>
                        <defs>
                            <filter id="filter0_d_54_6" x="6.10352e-05" y="0" width="56.0075" height="56.8828"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset/>
                                <feGaussianBlur stdDeviation="10"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.37 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_54_6"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_54_6" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                    <iframe id="iframe" width="1280" height="720" title="Samduuf Education" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                </div>
            </div>
        </section><!-- Video end -->
        <!-- Usefull begin -->
        <section class="bg-gray py-5">
            <h2 class="text-center mb-4">{{__('data.useful-sites')}}</h2>
            <div class="container">
                <div class="row useful">
                    @foreach($usefulSites as $usefulSite)
                        <div class="col-3 px-2">
                            <a href="{{$usefulSite->url}}">
                                <img width="100%"
                                     src="{{$usefulSite->image_path}}"
                                     alt="uzedu">
                                <span class="useful-text p-3">{{  $usefulSite->{'desc_'.$locale}  }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- Usefull end -->
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


