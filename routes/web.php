<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto ID: " . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria ID: " . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário ID: " . $id;
});