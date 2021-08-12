<?php


namespace App\Http\View\Composers;


use App\Services\MenuService;
use Illuminate\View\View;

class LayoutComposer
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        // Dependencies automatically resolved by service container...
        $this->menuService = $menuService;
    }


    public function compose(View $view)
    {
        $lang = app()->getLocale();
        $view->with('menus', $this->menuService->makeMenu($lang));
    }
}
