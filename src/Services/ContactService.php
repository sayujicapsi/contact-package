<?php
namespace Sxp\Contact\Services;

use Sxp\Contact\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Sxp\Contact\Mail\ContactUsMail;

class ContactService {

    public function store($request)
    {
       
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->contact = $request->contact;
        $contact->message = $request->message;
        $contact->save();

        $this->sendMail($request);
        return $contact;
    }


    public function sendMail($request)
    {
        Mail::to(config('contact.send_mail_to'))->send(new ContactUsMail($request->name));
    }
}