@extends('layouts.app')

@section('title', 'Listagem de Alunos')

@section('content')
    <h1>Listagem de Alunos</h1>

    @if ($alunos->count() > 0)
        <ul>
            @foreach ($alunos as $aluno)
                <li>
                    <a href="{{ route('alunos.show', $aluno['id']) }}">
                        {{ $aluno['nome'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
@endsection