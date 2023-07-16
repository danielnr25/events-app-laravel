<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $request->request->add(['username' => Str::slug($request->username)]);
        $this->validate($request, [
            'empresa' => 'required|max:255|min:4',
            'name' => 'required|max:255|min:8',
            'username' => 'required|max:255|min:8',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'empresa' => ucwords($request->empresa),
            'name' =>  ucwords($request->name),
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        // autenticar usuario
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
    }
}
