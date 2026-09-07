<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f8; }
        .container { max-width: 500px; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="email"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .error { color: #d9534f; font-size: 13px; margin-top: 4px; }
        .btn { background: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-secondary { background: #6c757d; }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastrar Novo Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome do Aluno:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
            @error('nome')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn">Cadastrar Aluno</button>
        <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>

</body>
</html>