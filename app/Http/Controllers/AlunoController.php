<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    private array $alunos = [
        ['id' => 1, 'nome' => 'João Silva'],
        ['id' => 2, 'nome' => 'Maria Souza'],
        ['id' => 3, 'nome' => 'Pedro Santos'],
    ];

    public function index()
    {
      return view('alunos.index', ['alunos' => $this->alunos]);
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('alunos.index');
    }

    public function show($id)
    {
        $aluno = collect($this->alunos)->firstWhere('id', (int) $id);

        return view('alunos.show', ['aluno' => $aluno]);
    }

    public function edit($id)
    {
        $aluno = collect($this->alunos)->firstWhere('id', (int) $id);

        return view('alunos.edit', ['aluno' => $aluno]);
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