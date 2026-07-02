<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index', [
            'categorias' => $categorias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.categorias.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:10|max:255',
            'conteudo' => 'required',
            'cor' => 'required'
        ]);

        $categoria = new Categoria();

        $categoria->titulo = $request->titulo;
        $categoria->conteudo = $request->conteudo;
        $categoria->ativo = $request->ativo;
        $categoria->usuario_id = Auth::user()->id;

        $categoria->save();

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.categorias.editar');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "funcionou.. Deletou o registro";
    }
}
