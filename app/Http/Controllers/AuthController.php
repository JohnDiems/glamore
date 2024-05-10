<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // register
    public function register(Request $request) {

        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        $user = User::create($fields);

        Auth::login($user);

        return redirect()->route('home');

    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required'],
        ]);

        if(auth::attempt($fields, $request->remember)){
            return redirect()->intended('dashboard');
        }else {
            return back()->withErrors(['failed' => 'The provided credentials
            do not match!']);
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
