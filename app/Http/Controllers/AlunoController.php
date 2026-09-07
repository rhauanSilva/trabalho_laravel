<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
<<<<<<< HEAD
    // READ: Listar todos os alunos
    public function index()
    {
        return response()->json(Aluno::all());
=======
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
>>>>>>> 7a97d622bb4a2c95e26c03199142241cb5bdd04c
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
=======
        return redirect()->route('alunos.index');
>>>>>>> 7a97d622bb4a2c95e26c03199142241cb5bdd04c
    }

    // READ: Exibir um aluno específico
    public function show(Aluno $aluno)
    {
<<<<<<< HEAD
        return response()->json($aluno);
=======
        $aluno = collect($this->alunos)->firstWhere('id', (int) $id);

        return view('alunos.show', ['aluno' => $aluno]);
>>>>>>> 7a97d622bb4a2c95e26c03199142241cb5bdd04c
    }

    // UPDATE: Atualizar dados de um aluno
    public function update(Request $request, Aluno $aluno)
    {
<<<<<<< HEAD
        $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:alunos,email,' . $aluno->id,
        ]);

        $aluno->update($validated);

        return response()->json($aluno);
=======
        $aluno = collect($this->alunos)->firstWhere('id', (int) $id);

        return view('alunos.edit', ['aluno' => $aluno]);
>>>>>>> 7a97d622bb4a2c95e26c03199142241cb5bdd04c
    }

    // DELETE: Remover um aluno
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return response()->json(['message' => 'Aluno removido com sucesso']);
    }
}