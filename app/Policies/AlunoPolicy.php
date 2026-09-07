<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    /**
     * Qualquer usuário autenticado pode visualizar a lista de alunos.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Apenas Admin pode cadastrar novos alunos (ATV 23).
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Admin e Professor podem editar dados do aluno (ATV 23).
     */
    public function update(User $user, Aluno $aluno): bool
    {
        return in_array($user->role, ['admin', 'professor']);
    }

    /**
     * Apenas Admin pode excluir alunos (ATV 23).
     */
    public function delete(User $user, Aluno $aluno): bool
    {
        return $user->role === 'admin';
    }
}