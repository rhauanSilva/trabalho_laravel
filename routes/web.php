<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas exclusivas para usuários autenticados com perfil Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
});

// Rotas acessíveis por qualquer usuário autenticado
Route::middleware(['auth'])->group(function () {
    Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
});

require __DIR__.'/auth.php';