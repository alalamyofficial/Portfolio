<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $requst)
    {
        Mail::to('theories619@gmail.com')
            ->send(new ContactMail($requst->name, $requst->email, $requst->body));
        return redirect()->back();
    }
}
