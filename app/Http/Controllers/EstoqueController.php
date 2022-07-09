<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function estoque(){
        return view('estoque');
    }

    public function novo() {
        $dados['estoque'] = new Produto;
        return view('produtos.cadastro', $dados);
    }
    
    public function cadastrar(Request $request) {
    
        $request->validate([
            'nome'  => 'required',
            'fabricante'=> 'required',
            'contraIndi' => 'required',
            'valor'=> 'required|float',
            'quantidade'  => 'required|integer',
        ]);
    
        $produto = Produto::create($request->all());
    
        return redirect()->route('estoque.cadastro');
    
    }
}