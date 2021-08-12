<?php


namespace App\Repository\Eloquent;


use App\Models\UserRole;
use App\Repository\MenuRepositoryInterface;


class UserRolesRepository extends BaseRepository implements MenuRepositoryInterface
{

    public function __construct(UserRole $model)
    {
        parent::__construct($model);
    }

    public function findByUserId($user_id){
        return $this->model->newQuery()->where('user_id',$user_id)->firstOrFail();
    }
    public function create($attributes)
    {
        return $this->model->create($attributes);
    }
}
