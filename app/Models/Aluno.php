<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'curso', 'curso_id'];

    public function cursoRelacionado()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}