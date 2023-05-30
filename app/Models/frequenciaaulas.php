<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class frequenciaaulas extends Model
{
    protected $fillable = [
    'firstName',
    'lastName',
    'diaDaSemana',
    'dataAula',  
    'Presente', 
    'Ausente',
    'imagem',
];

}
