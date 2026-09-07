<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // READ: Listar todos os alunos
    public function index()
    {
        return response()->json(Aluno::all());
    }

    // CREATE: Salvar um novo aluno
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
        ]);

        $aluno = Aluno::create($validated);

        return response()->json($aluno, 201);
    }

    // READ: Exibir um aluno específico
    public function show(Aluno $aluno)
    {
        return response()->json($aluno);
    }

    // UPDATE: Atualizar dados de um aluno
    public function update(Request $request, Aluno $aluno)
    {
        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:alunos,email,' . $aluno->id,
        ]);

        $aluno->update($validated);

        return response()->json($aluno);
    }

    // DELETE: Remover um aluno
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return response()->json(['message' => 'Aluno removido com sucesso']);
    }
}