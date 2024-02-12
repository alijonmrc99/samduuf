<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $globalNews = Post::where('is_active', true)->where('type',1)->orderByDesc('date')->limit(12)->get();
        $globalAds = Post::where('is_active', true)->where('type',2)->orderByDesc('date')->limit(5)->get();
        
        View::share('globalNews', $globalNews);
        View::share('globalAds', $globalAds);

    }
}
