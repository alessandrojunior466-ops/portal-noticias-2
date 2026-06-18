<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Lista as Noticias do Banco
     */
    public function index()
    {
        return view('admin.noticias.index');
    }

    /**
     * Chamar a view do cadastrar noticias 
     */
    public function create()
    {
        //
    }

    /**
     * Armazenar o dados da noticias, enviadas pelo formulario
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Visualizar uma noticia
     */
    public function show(string $id)
    {
        //
    }

    /**
     * armazenar a atualização dos dados das noticias 
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Excluir uma noticia do banco de dados
     */
    public function destroy(string $id)
    {
        //
    }
}
