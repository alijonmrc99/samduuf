<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userService;
    private $flashMessageHelper;
    private $roles;

    public function __construct(UserService $userService, FlashMessageHelper $flashMessageHelper)
    {
        $this->userService = $userService;
        $this->flashMessageHelper = $flashMessageHelper;
        $this->roles = config('app.route_access');
    }

    public function index()
    {
        try {
            $users = $this->userService->getUsers();
        }catch (\Exception $e){
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return view('backend.user.index',[
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('backend.user.create', [
            'roles' => $this->roles
        ]);
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6'],
            'roles' => ['required', 'array']
        ]);

        try {
            $this->userService->create($request);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        try {
            $user = $this->userService->findById($id);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return view('backend.user.update',[
            'user' => $user,
            'roles' => $this->roles,
        ]);


    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:6'],
            'roles' => ['required', 'array']
        ]);
        try {
            $this->userService->updateById($id,$validate);
        } catch (\Exception $e) {
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->route('admin.user.index');
    }

    public function delete($id)
    {
        try {
            $this->userService->deleteById($id);
        }catch (\Exception $e){
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->back();
    }
}
