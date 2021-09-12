<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'cpf', 'adress', 'data_nascimento', 'id_contatos'
    ];

    public function contatos()
    {
        return $this->hasMany(Contato::class, 'id_contatos', 'id_contatos');
    }
}
