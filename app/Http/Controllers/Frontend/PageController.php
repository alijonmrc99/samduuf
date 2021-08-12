<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\MenuService;
use App\Services\PageService;

class PageController extends Controller
{
    private $pageService;
    private $menuService;

    public function __construct(MenuService $menuService, PageService $pageService)
    {
        $this->menuService = $menuService;
        $this->pageService = $pageService;
    }

    public function index($locale, $slug)
    {

        try {
            $menu = $this->menuService->findBySlug($slug);
            $page = $this->pageService->findByMenuId($menu->id);
            if (!$menu || !$page){
                throw new \Exception();
            }

        } catch (\Exception $e) {
            abort(404);
        }


        return view('frontend.page.index', [
            'page' => $page,
            'menu' => $menu,
            'locale' => $locale
        ]);
    }
}
