<?php


namespace App\Services;

use App\Http\Requests\MenuRequest;
use App\Repository\Eloquent\PageRepository;
use App\Repository\MenuRepositoryInterface;
use Str;

class MenuService
{
    const MENU_ROOT_ID = 1;
    const LINK_ROOT_ID = 2;
    private $menuRepository;
    private $pageRepository;

    public function __construct(MenuRepositoryInterface $menuRepository, PageRepository $pageRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->pageRepository = $pageRepository;
    }


    public function create(MenuRequest $request)
    {
        $preparedAttributes = $request->all();
        $preparedAttributes['slug'] = Str::slug($preparedAttributes['title_en'] . ' ' . date('d-m-Y'));
        $preparedAttributes['degree'] = $this->makeDegree($preparedAttributes['parent_id']);

        return $this->menuRepository->create($preparedAttributes);
    }

    public function getAll()
    {
        return $this->menuRepository->getAll();
    }

    public function getWithParentAndPaginate($paginate)
    {
        return $this->menuRepository->getWithParentAndPaginate($paginate);
    }

    public function getMenuWithChildren()
    {
        return $this->menuRepository->getMenuWithChildren();
    }


    public function makeMenu($lang)
    {
        $menus = $this->getAll();

        return $this->checkChild($this->parseTree($menus, $lang, self::MENU_ROOT_ID));
    }

    private function parseTree($tree, $lang, $root = null)
    {
        $return = array();
        # Traverse the tree and search for direct children of the root
        foreach ($tree as $child => $parent) {
            # A direct child is found

            if ($parent->parent_id == $root) {
                # Remove item from tree (we don't need to traverse this again)
                unset($tree[$child]);
                # Append the child into result array and parse its children
                $return[] = array(
                    'id' => $parent->id,
                    'title' => $parent->{'title_' . $lang},
                    'link' => $parent->link ? $parent->link : '/page/' . $parent->slug,
                    'children' => $this->parseTree($tree, $lang, $parent->id)
                );
            }
        }
        return empty($return) ? null : $return;
    }

    private function checkChild($tree)
    {

        foreach ($tree as $key => $menu) {
            $hasDoubleChild = false;
            if ($menu['children']) {
                foreach ($menu['children'] as $key2 => $sub) {
                    if ($sub['children']) {
                        $tree[$key]['children'][$key2]['has'] = true;
                        $hasDoubleChild = true;
                    }
                }
            }
            $tree[$key]['hasDouble'] = $hasDoubleChild;

        }
        return $tree;
    }

    private function makeDegree($parent_id)
    {
        $parentMenu = $this->menuRepository->findById($parent_id);
        return $parentMenu->degree + 1;
    }

    public function findById($id)
    {
        return $this->menuRepository->findById($id);
    }

    public function hasAnyChild($parent_id)
    {
        return $this->menuRepository->findChildsByParentId($parent_id)->count();
    }

    public function hasPage($menu_id)
    {
        $page = $this->pageRepository->findByMenuId($menu_id);
        return $page ? true : false;
    }

    public function update($id, MenuRequest $request)
    {
        $menuToChange = $this->findById($id);

        $preparedAttributes = $request->only([
            'title_uz',
            'title_kuz',
            'title_ru',
            'title_en',
            'link',
            'parent_id',
            'priority'
        ]);
        $preparedAttributes['slug'] = Str::slug($preparedAttributes['title_en'] . ' ' . date('d-m-Y'));
        $preparedAttributes['degree'] = $this->makeDegree($preparedAttributes['parent_id']);

        return $menuToChange->update($preparedAttributes);
    }

    public function findBySlug($slug){
        return $this->menuRepository->findBySlug($slug);
    }
}
