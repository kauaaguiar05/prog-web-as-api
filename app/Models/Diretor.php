<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'ano_de_nascimento'
    ];
}

public function Diretor(): OnetoMany
    {
        return $this->OnetoMany(Filme::class);
    }
