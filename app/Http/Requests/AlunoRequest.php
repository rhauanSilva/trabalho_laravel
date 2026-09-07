<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; // Importamos a classe Rule do Laravel

class AlunoRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer essa requisição.
     */
    public function authorize(): bool
    {
        return true; 
    }

    /**
     * Regras de validação (ATV 15)
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|min:3|max:255',
            'email' => [
                'required',
                'email',
                // Essa regra verifica se é único, mas se houver um aluno (edição), ele ignora o ID dele de forma segura.
                Rule::unique('alunos', 'email')->ignore($this->aluno),
            ],
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