<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        return view('produtos.index', ['produtos' => Produto::all()]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'custo' => 'required',
            'quantidade' => 'required',
        ]);

        Produto::create($data);

        return redirect()->route('produtos.index');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', ['produto' => $produto]);
    } 

    public function edit(Produto $produto)
    {
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Produto $produto, Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'custo' => 'required',
            'quantidade' => 'required',
        ]);
        
        $produto->update($data);

        return redirect()->route('produtos.index');
    }

    public function delete(Produto $produto)
    {
        return view('produtos.delete', ['produto' => $produto]);
    }
    
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
