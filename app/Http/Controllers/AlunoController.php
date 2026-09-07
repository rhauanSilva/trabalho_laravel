<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return "Listagem de alunos (index)";
    }

    public function create()
    {
        return "Formulário de criação de aluno (create)";
    }

    public function store(Request $request)
    {
        return "Salvar novo aluno (store)";
    }

    public function show($id)
    {
        return "Exibir detalhes do aluno {$id} (show)";
    }

    public function edit($id)
    {
        return "Formulário de edição do aluno {$id} (edit)";
    }

    public function update(Request $request, $id)
    {
        return "Atualizar dados do aluno {$id} (update)";
    }

    public function destroy($id)
    {
        return "Remover aluno {$id} (destroy)";
    }
}