<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use Illuminate\Support\Facades\Hash;

class CompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    public function index()
    {
        return view('cadastro.compras');
    }

    public function cadastrarCompras(Request $request) //CADASTRAR PRODUTOS
    {
        $this->validate($request, [
            'valor_total' => ['required', 'integer'],
            'quant_tot_comprada' => ['required'],
            'cpf_gerente' => ['required', 'string', 'max:11']
        ]);

        Compra::create($request->all());

        return redirect()->intended(route('user.compras'));
    }
}
