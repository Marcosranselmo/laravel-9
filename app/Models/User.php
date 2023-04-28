<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',

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

        'image',

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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
