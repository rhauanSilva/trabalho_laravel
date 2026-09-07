@extends('layouts.app')

@section('title', 'Novo Aluno')

@section('content')
    <h1>Cadastrar Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf
        <label>
            Nome:
            <input type="text" name="nome" required>
        </label>
        <button type="submit">Salvar</button>
    </form>
@endsection