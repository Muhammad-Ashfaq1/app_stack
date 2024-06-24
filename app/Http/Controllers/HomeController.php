<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function clientView()
    {
        return view('partials.clients');
    }
    public function profileView()
    {
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        return view('partials.profile', compact( 'name','email'));
    }
    public function chatView()
    {
        return view('partials.chat');
    }
}
