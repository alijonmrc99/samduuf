<?php


namespace App\Repository\Eloquent;


use App\Models\Contact;
use App\Models\User;


class ContactRepository extends BaseRepository
{

    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }

    public function findById($id){
        return $this->model->findOrFail($id);
    }

    public function getWithPaginate($rows){
        return $this->model->paginate($rows);
    }

    public function create($attributes){
        return $this->model->create($attributes);
    }

}
