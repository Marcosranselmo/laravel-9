<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
   

class Mensalidade extends Model
{
    protected $table = "mensalidade";
    protected $fillable = [
        
    'firstName',
    'lastName',

    'mesRef',
    'valorPag',
    'formaPag',
    'dataPag',

    'valorMensal',
    'dataInicio',
    'dataTermino',
    'dataVencimento',
    'qtdParcelas',
    'parcelasRestante',
    'parcelasEmAtraso',
    'imagem',

    ];
}
