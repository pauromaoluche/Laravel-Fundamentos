<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    //Define quais dados vao poder ser gravados no banco
    protected $fillable = [
        'nome',
        'endereco',
        'observacao'
    ];
    use HasFactory;
}
