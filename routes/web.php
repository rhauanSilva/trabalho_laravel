<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


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