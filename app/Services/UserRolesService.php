<?php


namespace App\Services;


use App\Repository\Eloquent\UserRolesRepository;
use PhpParser\JsonDecoder;

class UserRolesService
{
    private $userRolesRepository;


    public function __construct(UserRolesRepository $userRolesRepository)
    {
        $this->userRolesRepository = $userRolesRepository;
    }

    public function updateByUserId($user_id, array $roles){

        $user_role = $this->userRolesRepository->findByUserId($user_id);
        return $user_role->update([
            'roles' => json_encode($roles)
        ]);
    }

    public function create($user_id, array $roles){
        return $this->userRolesRepository->create([
            'user_id' => $user_id,
            'roles' => json_encode($roles)
        ]);
    }

}
