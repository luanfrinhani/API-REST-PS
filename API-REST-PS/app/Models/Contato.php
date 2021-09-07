<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $fillable = [
        'contato', 'id_contatos'
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class,'id_contatos');
    }
}
