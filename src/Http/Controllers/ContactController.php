<?php

namespace Sxp\Contact\Http\Controllers;

use Throwable;
use Illuminate\Http\Request;

use Sxp\Contact\Facades\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Sxp\Contact\Services\ContactService;
use Sxp\Contact\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    //
    public $service;

    public function __construct(ContactService $service)
    {
        
        $this->service = $service;
    }

    public function view()
    {
        return view("contact::contact");
    }

    public function store(StoreContactRequest $request)
    {
        try {
            $s = Session::put('tt', 'dsfsdfs');
            //dd(Auth::guard('web')->user());
            //$this->service->store($request);
            Contact::store($request);
            return redirect()->route('contact.view')->with('success', 'Thank you for contacting us. We will get back to you soon.');
        } catch (Throwable $th) {
            report($th);
            dd($th->getMessage());
        }
    }
}
