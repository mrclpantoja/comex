<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller{
    public function index(){
        $clientes = Cliente::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('clientes.index')
            ->with('clientes', $clientes)
            ->with('mensagemSucesso',$mensagemSucesso);

    }

    public function create(){
        return view('clientes.create');
    }
    
    public function store(ClienteFormRequest $request){
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
       $cliente =  Cliente::create($request->except('_token'));
        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' ADICIONADO com Sucesso!");
        
    }

    public function destroy(Cliente $cliente){
        //dd($request->route());
        //Cliente::destroy($request->cliente);
        $cliente->delete();
        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' REMOVIDO com Sucesso!");;;
    }

    public function edit(Cliente $cliente){
        //dd($categoria);
        return view('clientes.edit')->with('cliente', $cliente);
    }

    public function update(Cliente $cliente, ClienteFormRequest $request){
        $cliente->fill($request->all());
        $cliente->save();

        return to_route('clientes.index')
            ->with('mensagem.sucesso', "Cliente '{$cliente->nome}' atualizado com sucesso");
    }
    
}