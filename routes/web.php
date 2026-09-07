<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('home');
});

// ATV 1: Rotas simples
Route::get('/sobre', function () {
    return 'Página Sobre';
});

Route::get('/alunos', function () {
    return 'Página de Alunos';
});

Route::get('/contato', function () {
    return 'Página de Contato';
});

// ATV 2: Rotas com parâmetros
Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto ID: " . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria ID: " . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário ID: " . $id;
});

// ATV 3: Rotas com parâmetros opcionais
Route::resource('alunos', AlunoController::class);


Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos/{id}', [AlunoController::class, 'show'])->name('alunos.show');
Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');