<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signupView()
    {
        return view('auth.signup');
    }
    public function loginView()
    {
        return view('auth.login');
    }

    public function signupStore(Request $request)
    {
        $request->validate([
            'name' =>'required|string|min:3',
            'email' =>'required|email',
            'password' =>'required|confirmed',
        ]);
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->save();
        toastr()->success('Signup successfully!');
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            toastr()->success('Login successfully!');
            return redirect()->route('home');
        }
            toastr()->error('Invalid Credentials!');
            return redirect()->route('login')->with('error', 'Invalid Credentials');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
