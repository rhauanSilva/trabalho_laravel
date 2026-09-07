<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'user_id', // Adicionado aqui!
    ];

    // Um aluno pertence a um usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}