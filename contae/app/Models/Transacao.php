<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
     protected $fillable = [
        'descricao',
        'valor',
        'tipo',
        'categoria',
        'data',
    ];
}
