<?php

namespace App\Providers;

use App\Http\View\Composers\LayoutComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.layouts.main', LayoutComposer::class);
//        \View::composer(['frontend.layouts.main'], function ($view) {
//            $view->with('menus', $this->menuService->makeMenu());
//        });
    }
}
