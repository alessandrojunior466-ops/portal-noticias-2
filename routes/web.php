<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name('home');
Route::get("/noticia", [HomeController::class, "visualizarNoticias"])->name('visualizar');
Route::get("/contato", [HomeController::class, "contato"])->name('contato');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rotas do gerenciamento de Noticias

    Route::get('/dashbord/noticias', [NoticiaController::class, "index"])->name('admin.noticias.index');

    Route::get('/dashbord/noticias/cadastrar', [NoticiaController::class, "create"])->name('admin.noticias.cadastrar');

    Route::post('/dashbord/noticias/cadastrar', [NoticiaController::class, "store"])->name('admin.noticias.armazenar');

    Route::get('/dashbord/noticias/editar/{id}', [NoticiaController::class, "edit"])->name('admin.noticias.editar');

    Route::delete('/dashbord/noticias/excluir/{id}', [NoticiaController::class, "destroy"])->name('admin.noticias.excluir');

    Route::get('/dashbord/categorias/editar/{id}', [NoticiaController::class, "edit"])->name('admin.categorias.editar');

    Route::delete('/dashbord/categorias/excluir/{id}', [NoticiaController::class, "destroy"])->name('admin.categorias.excluir');

    //Rotas do gerenciamento de categorias

    Route::get('/dashbord/categorias', [CategoriaController::class, "index"])->name('admin.categorias.index');

    Route::get('/dashbord/categorias/cadastrar', [CategoriaController::class, "create"])->name('admin.categorias.cadastrar');
});

require __DIR__ . '/auth.php';
