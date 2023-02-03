<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller{
    public function index(){
        $clientes = Cliente::all();
            
        return view('clientes.index')->with('clientes', $clientes);

    }

    public function create(){
        return view('clientes.create');
    }
    
    public function store(Request $request){
        /*
        $nomeClientes = $request->input('nome');
        $cpfClientes = $request->input('cpf');
        $telefoneClientes = $request->input('telefone');
        $enderecoClientes = '';
        $ruaClientes = $request->input('rua');
        $numeroClientes = $request->input('numero');
        $complementoClientes = $request->input('complemento');
        $bairroClientes = $request->input('bairro');
        $cidadeClientes = $request->input('cidade');
        $estadoClientes = $request->input('estado');
        
        $cliente = new Cliente();
        
        $cliente->nome = $nomeClientes;
        $cliente->cpf = $cpfClientes;
        $cliente->numero = $numeroClientes;
        $cliente->complemento = $complementoClientes;
        $cliente->bairro = $bairroClientes;
        $cliente->cidade = $cidadeClientes;
        $cliente->estado = $estadoClientes;
        $cliente->telefone = $telefoneClientes;
        $cliente->rua = $ruaClientes;
        $cliente->save();
        */
        Cliente::create($request->except('_token'));
        return redirect('/clientes');
        
    }
 
}