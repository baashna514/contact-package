<?php

namespace Webeasy\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Webeasy\Contact\Models\Contact;
use Webeasy\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return back();
    }
}
