<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller{
    public function index(){
        $produtos = Produto::all();
            
        return view('produtos.index')->with('produtos', $produtos);

    }

    public function create(){
        return view('produtos.create');
    }
    
    public function store(Request $request){
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
        
        return redirect('/produtos');
        
    }
    
 
}