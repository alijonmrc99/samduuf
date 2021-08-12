<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Repository\Eloquent\MenuRepository;
use App\Services\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private $menuRepository;
    private $pageService;
    private $flashMessageHelper;

    public function __construct(MenuRepository $menuRepository, PageService $pageService, FlashMessageHelper $flashMessageHelper)
    {
        $this->menuRepository = $menuRepository;
        $this->pageService = $pageService;
        $this->flashMessageHelper = $flashMessageHelper;
    }

    public function index()
    {
        $pages = Page::with('getMenuOrLink')->paginate(25);

        return view('backend.page.page', [
            'pages' => $pages
        ]);
    }

    public function create()
    {
        $menusOrLinks = $this->menuRepository->getAllWithoutPage();

        return view('backend.page.create', [
            'menusOrLinks' => $menusOrLinks
        ]);
    }

    public function store(PageRequest $request)
    {
        try {
            $this->pageService->store($request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.page');
    }

    public function show($id)
    {
        try {
            $page = $this->pageService->findById($id);
            $menu = $this->menuRepository->findById($page->menu_id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return view('backend.page.view', [
            'page' => $page,
            'menu' => $menu
        ]);
    }

    public function edit($id)
    {

        try {
            $menusOrLinks = $this->menuRepository->getAllWithoutPage();
            $page = $this->pageService->findById($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return view('backend.page.update', [
            'menusOrLinks' => $menusOrLinks,
            'page' => $page
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->pageService->updateById($id,$request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.page.view', ['id' => $id]);
    }

    public function delete($id)
    {
        try {
            $this->pageService->deleteById($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return redirect()->back();
    }
}
