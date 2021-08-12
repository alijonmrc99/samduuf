<?php


namespace App\Repository\Eloquent;

use App\Models\Banner;

class BannerRepository extends BaseRepository
{
    public function __construct(Banner $model)
    {
        parent::__construct($model);
    }

    public function findById($id)
    {
        return $this->model->newQuery()->findOrFail($id);
    }

    public function create($attributes){
        $this->model->create($attributes);
    }

    public function getAll()
    {
        return $this->model->orderBy('priority')->get();
    }
}
