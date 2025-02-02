<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && $user->password === $request->password) {
            $request->session()->put('user_id', $user->id);

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'login' => 'Hibás felhasználónév vagy jelszó',
        ]);
    }
}
