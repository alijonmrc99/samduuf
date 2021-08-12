<?php


namespace App\Services;


use App\Repository\Eloquent\UserRepository;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $userRepository;
    private $userRoleService;


    public function __construct(UserRepository $userRepository, UserRolesService $userRoleService)
    {
        $this->userRepository = $userRepository;
        $this->userRoleService = $userRoleService;
    }

    public function findById($id)
    {
        return $this->userRepository->findById($id);
    }

    public function create(Request $request)
    {
        DB::beginTransaction();
        $attr = $request->only(['name', 'email', 'password']);
        $attr['password'] = Hash::make($attr['password']);
        try {
            $user = $this->userRepository->create($attr);
            $this->userRoleService->create($user->id, $request->roles);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
        }
    }

    public function getUsers()
    {
        return $this->userRepository->getUsers()->where('id', '<>', 1);
    }

    public function updateById($id, $attributes)
    {
        if ($attributes['password'])
            $attributes['password'] = Hash::make($attributes['password']);
        else
            unset($attributes['password']);


        DB::beginTransaction();

        try {
            $user = $this->userRepository->findById($id);
            $user->update($attributes);
            $this->userRoleService->updateByUserId($user->id, $attributes['roles']);
            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
        }
    }

    public function deleteById($id)
    {
        $user = $this->userRepository->findById($id);
        return $user->delete();
    }

}
