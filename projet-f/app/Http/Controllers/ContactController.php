<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Contact;  
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
// -----------Ver nordcoder--------
// -----------Ver --------
// -----------Ver akili--------

// -----------Ver nordcoder--------




        Mail::to('administrateur@chezmoi.com')
            ->send(new Contact($request->except('_token')));
 
        return view('confirm');
    }
}
