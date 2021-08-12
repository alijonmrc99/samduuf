<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\FlashMessageHelper;
use App\Http\Controllers\Controller;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;
    private $flashMessageHelper;

    public function __construct(ContactService $contactService, FlashMessageHelper $flashMessageHelper)
    {
        $this->contactService = $contactService;
        $this->flashMessageHelper = $flashMessageHelper;
    }

    public function index(){
        try {
           $contacts =  $this->contactService->getWithPaginate(20);
        }catch (\Exception $e){
            $this->flashMessageHelper->setExceptionMessage($e);
        }
        return view('backend.contact.index',[
            'contacts' => $contacts
        ]);
    }

    public function show($id){
        try {
            $contact = $this->contactService->findById($id);
        }catch (\Exception $e){
            $this->flashMessageHelper->setExceptionMessage($e);
        }
//        dd($contact);
        return view('backend.contact.view',[
            'contact' => $contact
        ]);
    }

    public function delete($id){
        try {
            $this->contactService->deleteById($id);
        }catch (\Exception $e){
            $this->flashMessageHelper->setExceptionMessage($e);
        }

        return redirect()->back();
    }
}
