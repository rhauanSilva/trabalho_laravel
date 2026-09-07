<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    // Libera os campos para serem salvos em massa pelo formulário
    protected $fillable = [
        'nome',
        'email',
    ];
}