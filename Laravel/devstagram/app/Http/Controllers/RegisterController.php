<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    //
    public function crear()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);
        User::create([
            'name' => $request->name,
            'username' =>  $request->username,
            'email' => $request->email,
            'password'=> bcrypt($request->password)
        ]);

        // Autenticar un usuario
        auth()->attempt($request->only('email', 'password'));

        //Redireccionar
        return redirect()->route('post.index')->with('success', 'Usuario registrado correctamente');
    }
}
