<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $noticias = Noticia::where('ativo', true)->orderByDesc('updated_at')->paginate(3);
        return view('home',['noticias'=> $noticias]);
    }

    public function visualizarNoticias()
    {
        return view('visualizar');
    }

    public function contato(){
        return view('contato');
    }
}
