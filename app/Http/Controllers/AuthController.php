<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function loginAuth(Request $request)
    {

        $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return redirect()->route('loginAuth')->with('invalid', 'credentials was invalid');
    }

    public function forgotPassword()
    {

        return view('auth.password');
    }

    public function register()
    {

        return view('auth.register');
    }

    public function registerAuth(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('loginAuth')->with('success', 'User Created');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
