<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Aluno::class);
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);
        Aluno::create($request->validated());
        return redirect()->route('alunos.index');
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        Gate::authorize('update', $aluno);
        $aluno->update($request->validated());
        return redirect()->route('alunos.index');
    }

    public function destroy(Aluno $aluno)
    {
        Gate::authorize('delete', $aluno);
        $aluno->delete();
        return redirect()->route('alunos.index');
    }
}