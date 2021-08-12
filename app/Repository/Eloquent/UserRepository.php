<?php


namespace App\Repository\Eloquent;


use App\Models\User;
use App\Repository\MenuRepositoryInterface;


class UserRepository extends BaseRepository implements MenuRepositoryInterface
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function findById($id){
        return $this->model->findOrFail($id);
    }

    public function create($attributes)
    {
        return $this->model->create($attributes);
    }

    public function getUsers()
    {
        return $this->model->with('roles')->get();
    }
}
