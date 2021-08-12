<?php


namespace App\Repository\Eloquent;


use App\Models\Page;

class PageRepository extends BaseRepository
{
    protected $model;

    public function __construct(Page $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

        public function store($attributes){
        return $this->model->create($attributes);
    }

    public function findByMenuId($menu_id)
    {
        return $this->model->newQuery()->where('menu_id',$menu_id)->first();
    }


    public function findById($id){
        return $this->model->find($id);
    }


}
