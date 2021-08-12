<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\PostViewService;

class PostController extends Controller
{
    const POST_PAGINATION = 6;
    private $postService;
    private $postViewService;

    public function __construct(PostService $postService, PostViewService $postViewService)
    {
        $this->postService = $postService;
        $this->postViewService = $postViewService;
    }

    public function index($locale, $slug)
    {
        try {
            $post = $this->postService->findBySlug($slug);
            $this->postViewService->add($post->id);
            $post_ids = $post->pluck('id')->toArray();
            $postViews = $this->postViewService->countByIds($post_ids);
        } catch (\Exception $e) {
            abort(404);
        }

        $this->postViewService->add($post->id);

        return view('frontend.post.index', [
            'post' => $post,
            'locale' => $locale,
            'postViews' => $postViews,
        ]);
    }

    public function allPost($locale)
    {
        try {
            $posts = $this->postService->getAllWithPaginate(self::POST_PAGINATION);
            $post_ids = $posts->pluck('id')->toArray();
            $postViews = $this->postViewService->countByIds($post_ids);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('frontend.post.posts', [
            'posts' => $posts,
            'locale' => $locale,
            'postViews' => $postViews,

        ]);
    }

    public function allPostNews($locale)
    {
        try {
            $posts = $this->postService->getNewsWithPaginate(self::POST_PAGINATION);
            $post_ids = $posts->pluck('id')->toArray();
            $postViews = $this->postViewService->countByIds($post_ids);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('frontend.post.news', [
            'posts' => $posts,
            'locale' => $locale,
            'postViews' => $postViews,

        ]);
    }

    public function allPostAds($locale)
    {
        try {
            $posts = $this->postService->getAdsWithPaginate(self::POST_PAGINATION);
            $post_ids = $posts->pluck('id')->toArray();
            $postViews = $this->postViewService->countByIds($post_ids);
        } catch (\Exception $e) {
            abort(404);
        }

        return view('frontend.post.ads', [
            'posts' => $posts,
            'locale' => $locale,
            'postViews' => $postViews,

        ]);
    }
}
