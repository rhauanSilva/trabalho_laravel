<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f8; }
        .container { max-width: 800px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #f8f9fa; }
        .alert { padding: 10px; background: #d4edda; color: #155724; border-radius: 4px; margin-bottom: 15px; }
        .btn { background: #28a745; color: white; padding: 8px 12px; border-radius: 4px; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>

<div class="container">
    <h1>Lista de Alunos</h1>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    <a href="{{ route('alunos.create') }}" class="btn">+ Novo Aluno</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @forelse($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Nenhum aluno encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>