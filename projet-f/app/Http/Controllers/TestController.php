<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

####################################
// Ver nordC
####################################
use App\Mail\TestMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;


class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('bar');
    }
    
    public function bar()
    {
        $user = ['email' => 'user@test.com', 'name'=>'monsieur truc'];


        Mail::to('test@mail.test')
        ->send(new TestMail());
        return view('test.bar');
    }
}
