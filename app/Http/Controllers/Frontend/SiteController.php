<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UsefulSite;
use App\Models\VideoClip;
use App\Models\PhotoGallery;
use App\Services\BannerService;
use App\Services\MenuService;
use App\Services\PostService;
use App\Services\PostViewService;

class SiteController extends Controller
{
    private $bannerService;
    private $menuService;
    private $postService;
    private $postViewService;

    public function __construct(MenuService $menuService, BannerService $bannerService, PostService $postService, PostViewService $postViewService)
    {
        $this->bannerService = $bannerService;
        $this->menuService = $menuService;
        $this->postService = $postService;
        $this->postViewService = $postViewService;
    }

    public function index($locale)
    {
        try {
            $usefulSites = UsefulSite::query()->orderByDesc('order')->get();
            $videoClip = VideoClip::query()->where('is_main', true)->first();
            $banners = $this->bannerService->getAll();
            $latestFiveNews = $this->postService->getLatestFiveNews();
            $latestFiveAds = $this->postService->getLatestFiveAd();
            $news_ids = $latestFiveNews->pluck('id')->toArray();
            $ads_ids = $latestFiveAds->pluck('id')->toArray();
            $postViews = $this->postViewService->countByIds($news_ids, $ads_ids);
            $photos = PhotoGallery::orderByDesc('id')->limit(6)->get();
        } catch (\Exception $e) {

        }
        return view('frontend.site.index', [
            'banners' => $banners,
            'latestFiveNews' => $latestFiveNews,
            'latestFiveAds' => $latestFiveAds,
            'postViews' => $postViews,
            'locale' => $locale,
            'usefulSites' => $usefulSites,
            'videoClip' => $videoClip,
            'photos' => $photos
        ]);
    }

}
