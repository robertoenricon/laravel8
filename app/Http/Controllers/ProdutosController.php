<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all(); //exibe todos

        return view('produtos/index', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos/create');
    }

    public function insert(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;

        $produto->save();
        return redirect()->route('produtos');
    }

    public function show($id, $valor = false)
    {
        $produto = Produto::find($id);
        return view('produtos/show', ['id' => $id, 'valor' => $valor, 'produto' => $produto]);
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function editar(Request $request, produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;

        $produto->save();
        return redirect()->route('produtos');
    }

    public function delete(produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos');
    }
}
