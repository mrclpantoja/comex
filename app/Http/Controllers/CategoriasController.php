<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaFormRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller{
    public function index(){
        $categorias = Categoria::all();
        $mensagemSucesso = session('mensagem.sucesso');
        //se quiser adicionar uma mensagem na sessão fica assim:
        //session(['mensagem.sucesso' => "Mensagem a ser exibida!"]);

        return view('categorias.index')
            ->with('categorias', $categorias)
            ->with('mensagemSucesso',$mensagemSucesso);

    }

    public function create(){
        return view('categorias.create');
    }

    public function store(CategoriaFormRequest $request){
        /*$nomeCategoria = $request->input('nome');
        $categoria = new Categoria();
        $categoria->nome = $nomeCategoria;
        $categoria->save();
        */
        $serie = Categoria::create($request->except('_token'));
        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria '{$serie->nome}' ADICIONADA com Sucesso!");
        
    }

    public function destroy(Categoria $categoria){ //aqui pega os dados do controller Categorias mas não sei pq só funcionou com a variável no singular e não com $categorias
        //$categoria = Categoria::find($categorias);
        //dd($categoria);
        //Categoria::all($request->categoria);
        //Categoria::destroy($request->categoria);

        $categoria->delete();
        //dd($categorias->id);
        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria '{$categoria->nome}' REMOVIDA com Sucesso!");
    }

    public function edit(Categoria $categoria){
        //dd($categoria);
        return view('categorias.edit')->with('categoria', $categoria);
    }

    public function update(Categoria $categoria, CategoriaFormRequest $request){
        $categoria->fill($request->all());
        $categoria->save();

        return to_route('categorias.index')
            ->with('mensagem.sucesso', "Categoria '{$categoria->nome}' atualizada com sucesso");
    }

}