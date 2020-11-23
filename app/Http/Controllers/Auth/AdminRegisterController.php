<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminRegisterController extends Controller
{
    public function __construct()
    {
        //Para Mostrar o Formulário de Login e Fazer o Registro no BD o usuário deve está autenticado
        $this->middleware('auth:admin'); //->except('showRegisterForm', 'register');
    }

    public function showRegisterForm() // Exibindo o Formulário de Login
    {
        return view('auth.admin-register');
    }

    public function register(Request $request) // Fazendo o Registro
    {

        //dd($request->all());

        $this->validate($request, [
            'cpf' => ['required', 'string', 'max:255', 'unique:admins'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Admin::create($request->all());

        return redirect()->intended(route('admin.register'));
    }
}
