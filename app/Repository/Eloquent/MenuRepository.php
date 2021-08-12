<?php


namespace App\Repository\Eloquent;


use App\Models\Menu;
use App\Repository\MenuRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;


class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{
    private $menuTitle = 'Menu(Root)';

    private $linkTitle = 'Link(Root)';

    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }

    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    public function getAll()
    {
        return $this->model->newQuery()->orderBy('degree')->orderBy('priority')->get();
    }

    public function getWithParentAndPaginate($paginate)
    {
        return $this->model->with('getParent')->paginate($paginate);
    }

    public function getMenuWithChildren()
    {
        return $this->model->where('title_uz', $this->menuTitle)->with('getChilds')->first();
    }



    public function getLinkChilds()
    {
        return $this->model->where('title_uz', $this->linkTitle)->with('getChilds')->first();
    }

    public function getAllWithoutPage()
    {
        return $this->model
            ->selectRaw('menus.id,title_uz')
            ->where('parent_id', '<>', 0)
            ->leftJoin('pages', 'menus.id', '=', 'pages.menu_id')
            ->where(function (Builder $builder){
                $builder->where('menu_id',null)->where('link', null);
            })
            ->orWhere(function (Builder $builder){
                $builder->where('menu_id',null)->where('link', 'like','/page/%');
            })
            ->get();
    }

    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findChildsByParentId($parent_id)
    {
        return $this->model->where('parent_id', $parent_id)->get();
    }

    public function findBySlug($slug){
        return $this->model->newQuery()->where('slug',$slug)->orWhere('link','/page/' . $slug)->firstOrFail();
    }
}
