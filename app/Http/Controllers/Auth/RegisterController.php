<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // make index function
    public function index()
    {
        return view('auth.register.index');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/home');
    }

}
