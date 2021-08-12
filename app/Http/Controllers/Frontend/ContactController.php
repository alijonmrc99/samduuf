<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\ContactService;
use App\Services\EmailService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;

    private $emailService;

    public function __construct(ContactService $contactService, EmailService $emailService)
    {
        $this->contactService = $contactService;
        $this->emailService = $emailService;
    }

    public function index()
    {
        return view('frontend.contact.index');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'nullable|string|min:3|max:64',
            'surname' => 'nullable|string|min:3|max:64',
            'email' => 'required|email|min:3|max:64',
            'message' => 'required|string|min:10|max:512',
            'captcha' => 'required|captcha'
        ]);
        try {
            $contact = $this->contactService->create($validate);
            $this->emailService->sendContact(config('app.director_email'), $contact);
        } catch (\Exception $e) {
            dd($e);
            abort(500);
        }
        return redirect()->back();
    }

}
