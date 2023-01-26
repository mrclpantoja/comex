<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller{
    public function index(){
        $categorias = [
            'CELULARES',
            'INFORMÁTICA',
            'MÓVEIS',
            'AUTOMOTIVA',
            'LIVROS',
            'BELEZA',
            'ESPORTE',
            'LUXO'
        ];

        $html = '<ul>';
        foreach($categorias as $categoria){
            $html .= "<li>$categoria</li>";
        }
        $html .= '</ul>';
        
        return $html;

    }
}