<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function clientView()
    {
        return view('partials.clients');
    }
    public function profileView()
    {
        $name = 'Ansar Abbas';
        $designation = 'Laravel Developer';
        return view('partials.profile', compact( 'name','designation'));
    }
    public function chatView()
    {
        return view('partials.chat');
    }
}
