<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Services\MenuService;


class MenuController extends Controller
{
    private $menuService;
    private $flashMessageHelper;

    public function __construct(MenuService $menuService, FlashMessageHelper $flashMessageHelper)
    {
        $this->menuService = $menuService;
        $this->flashMessageHelper = $flashMessageHelper;
    }

    public function index()
    {
        $menus = $this->menuService->getWithParentAndPaginate(15);

        return view('backend.menu.page', [
            'menus' => $menus
        ]);
    }

    public function store(MenuRequest $request)
    {
        try {
            $this->menuService->create($request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return redirect()->back();
    }


    public function edit($id)
    {
        $menus = $this->menuService->getAll();
        $menuToChange = $this->menuService->findById($id)->toArray();
        $menuToChange['is_link'] = $menuToChange['link'] ? 'on' : null;

        return view('backend.menu.update', [
            'menus' => $menus,
            'menuToChange' => $menuToChange
        ]);
    }

    public function update(MenuRequest $request, $id)
    {
        try {
            $this->menuService->update($id, $request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.menu');
    }

    public function delete($id)
    {
        try {
            if (!$this->menuService->hasAnyChild($id) && !$this->menuService->hasPage($id))
                $this->menuService->findById($id)->delete();
            else {
                $this->flashMessageHelper->setMessage("Couln't delete parent item, because it has got a child or a page");
            }
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.menu');
    }
}


