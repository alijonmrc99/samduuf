<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function showChangeUserForm()
    {
        return view('backend.auth.settings');
    }

    public function updateSettings(UserRequest $request, FlashMessageHelper $flashMessageHelper)
    {
        $request->validated();

        if (Auth::validate(['email' => \auth()->user()->email, 'password' => $request->get('password')])) {
            try {
                $data = [
                    'email' => $request->get('email'),
                    'name' => $request->get('name'),
                    'password' => Hash::make($request->filled('new-password') == null ? $request->get('password') : $request->get('new-password'))];
                Auth::user()->update($data);
            } catch (\Exception $e) {
                $flashMessageHelper->setExceptionMessage($e);
            }
        } else {
            $flashMessageHelper->setMessage('Username or Password is incorrect');
        }

        return redirect()->back();
    }
}
