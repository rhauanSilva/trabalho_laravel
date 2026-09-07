<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Vai Determina se o usuário está autorizado a fazer essa requisição.
     */
    public function authorize(): bool
    {
        return true; // Alterado para true para permitir a requisição
    }

    /**
     * Regras de validação (ATV 15)
     */
    public function rules(): bool|array
    {
        $alunoId = $this->aluno ? $this->aluno->id : null;

        return [
            'nome' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:alunos,email,' . $alunoId,
        ];
    }

    /**
     * Mensagens de validação personalizadas (DESAFIO)
     */
    public function messages(): array
    {
        return [
            'nome.required' => 'O campo NOME é obrigatório.',
            'nome.min' => 'O nome deve conter pelo menos 3 caracteres.',
            'nome.max' => 'O nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O campo E-MAIL é obrigatório.',
            'email.email' => 'Informe um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado no sistema.',
        ];
    }
}