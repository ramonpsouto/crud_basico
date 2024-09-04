<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class FilmesController extends Controller
{
    public function index()
    {
        return view('filmes.index', ['filmes' => Filme::all()]);
    }

    public function create()
    {
        return view('filmes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'diretor' => 'required',
            'ano' => 'required',
        ]);

        Filme::create($data);

        return redirect()->route('filmes.index');
    }

    public function show(Filme $filme)
    {
        return view('filmes.show', ['filme' => $filme]);
    } 

    public function edit(Filme $filme)
    {
        return view('filmes.edit', ['filme' => $filme]);
    }

    public function update(Filme $filme, Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required',
            'diretor' => 'required',
            'ano' => 'required',
        ]);
        
        $filme->update($data);

        return redirect()->route('filmes.index');
    }

    public function delete(Filme $filme)
    {
        return view('filmes.delete', ['filme' => $filme]);
    }
    
    public function destroy(Filme $filme)
    {
        $filme->delete();

        return redirect()->route('filmes.index');
    }
}
