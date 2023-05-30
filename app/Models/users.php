<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class alunos extends Model
{

    use HasFactory, Notifiable;

    protected $table = "alunos";

    protected $fillable = [
        'ativo',
        'firstName',
        'lastName', 
        'celular',  

        'IdadeAtual',
        'dataNascimento',   
        'escolaridade',
        'sexo',
     
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',

        'curso',
        'periodo', 
        'horario',
        'localDoCurso',

        'uniforme',
        'modelo',

        'foto',
        'nome_foto',

        'dataInicio',

        'usuario',
        'email', 
        'password',

        'permissao01',
        'permissao02',
        'permissao03',
        'permissao04',
        'permissao05',
        'permissao06',
        'permissao07',
        'permissao08',
        'permissao09',
        'permissao10',
    ];

}
