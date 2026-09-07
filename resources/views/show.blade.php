@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <h1>Detalhes do Aluno</h1>

    <p><strong>ID:</strong> {{ $aluno['id'] }}</p>
    <p><strong>Nome:</strong> {{ $aluno['nome'] }}</p>

    <a href="{{ route('alunos.index') }}">Voltar para a lista</a>
@endsection