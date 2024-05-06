<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class AuthController extends Controller
{
    // register
    public function register(Request $request) {

        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        User::create($fields);
        dd($fields);

        return redirect()->route('home');

    }
}
