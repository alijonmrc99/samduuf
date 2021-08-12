<?php


namespace App\Services;


use App\Repository\Eloquent\ContactRepository;

class ContactService
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getWithPaginate($rows){
        return $this->contactRepository->getWithPaginate($rows);
    }

    public function findById($id)
    {
        return $this->contactRepository->findById($id);
    }
    public function create($attributes){
        return $this->contactRepository->create($attributes);
    }

    public function deleteById($id){
        return $this->contactRepository->findById($id)->delete();
    }


}
