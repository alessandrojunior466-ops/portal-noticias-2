<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Listar as Notícias de um banco.
     */
    public function index()
    {
        $noticias = Noticia::all();

        return view("admin.noticias.index", [
            'noticias' => $noticias,
        ]);

        /*
        Outra forma de fazer o mesmo de cima
        return view("admin.noticias.index", compact('noticias');
        */
    }

    /**
     * Chamar o view do cadastrar notícias.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->pluck('nome', 'id');
        return view("admin.noticias.cadastrar",[
            'categorias'=>$categorias
        ]);
    }

    /**
     * Armazenar os Dados da Notícia, enviado pelo formulário.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Chamar o view do editor de notícias.
     */
    public function edit(string $id)
    {
        return view("admin.noticias.editar");
    }

    /**
     * Armazenar a atualização dos dados da notícia.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Excluir uma notícia do banco de dados.
     */
    public function destroy(string $id)
    {
        return "funcionou.. Deletou o registro";
    }
}
