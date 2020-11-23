<?php

namespace App\Http\Controllers\Users\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $gerente;

    public function __construct(Request $request, Admin $admin)
    {
        $this->gerente = $admin;

        $this->middleware('auth:admin');

    }

    public function index()
    {
        return view('admin');
    }

    public function listar() // Listar todos os admins
    {
        $admins = Admin::paginate(2);

        return view('admin.admin-listar', ['admins' => $admins]);
    }

    public function show($id)
    {
        //$admin = Admin::where('id', $id)->first();

        if (!$admin = Admin::find($id)) {
            return redirect()->back();
        }

        return view('admin.show-admin', ['admin' => $admin]);
    }

    public function delete($id) //VAI APAGAR O ADMIN DO BANCO DE DADOS
    {

        if (!$admin = Admin::find($id)) {
            return redirect()->back();
        }

        $admin->delete();
        return redirect()->route('admin.admin.listar');

    }

    public function edit($id) // Mostrar formulário para editar o admin
    {
        if (!$admin = Admin::find($id)) {
            return redirect()->back();
        }

        return view('admin.form-edit', ['admin' => $admin]);
    }

    public function update(Request $request, $id) // Atualizar informações do admin
    {
        $admin = Admin::find($id);

        $admin->update($request->all());

        return redirect()->route('admin.listar');
    }

    public function pesquisar(Request $request)//Pesquisar admin
    {
        $pesquisar = $request->except('_token');

        $admins = $this->gerente->pesquisar($request->pesquisar);

        return view('admin.admin-listar', ['admins' => $admins, 'pesquisar' => $pesquisar]);
    }

}
