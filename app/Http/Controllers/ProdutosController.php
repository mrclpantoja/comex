<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoFormRequest;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller{
    public function index(){
        $produtos = Produto::all();
        $mensagemSucesso = session('mensagem.sucesso');
            
        return view('produtos.index')
            ->with('produtos', $produtos)
            ->with('mensagemSucesso',$mensagemSucesso);

    }

    public function create(){
        return view('produtos.create');
    }
    
    public function store(ProdutoFormRequest $request){
        /*
        $nomeProdutos = $request->input('nome');
        $descricaoProdutos = $request->input('descricao');
        $estoqueProdutos = $request->input('estoque');
        $precounitarioProdutos = $request->input('precounitario');
        
        $produto = new Produto();
        
        $produto->nome = $nomeProdutos;
        $produto->descricao = $descricaoProdutos;
        $produto->precounitario = $precounitarioProdutos;
        $produto->quantidade = $estoqueProdutos;
                
        $produto->save();
        */

        $produto = Produto::create($request->except('_token'));
        return to_route('produtos.index')
        ->with('mensagem.sucesso', "Produto '{$produto->nome}' ADICIONADO com Sucesso!");
        
    }
    
    public function destroy(Produto $produto){
        //dd($request->route());
        //Produto::destroy($request->produto);
        $produto->delete();
        
        return to_route('produtos.index')
        ->with('mensagem.sucesso', "Produto '{$produto->nome}' REMOVIDO com Sucesso!");;
    }

    public function edit(Produto $produto){
        //dd($categoria);
        return view('produtos.edit')->with('produto', $produto);
    }

    public function update(Produto $produto, ProdutoFormRequest $request){
        $produto->fill($request->all());
        $produto->save();

        return to_route('produtos.index')
            ->with('mensagem.sucesso', "Produto '{$produto->nome}' atualizado com sucesso");
    }
 
}