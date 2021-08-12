<?php


namespace App\Services;


use App\Mail\ContactEmail;
use App\Models\Contact;

class EmailService
{

    public function sendContact($email, Contact $contact)
    {
        \Mail::to($email)->send(new ContactEmail($contact));
    }
}
