<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'ativo' => true,
            'firstName' => 'Marcos',
            'lastName' => 'Anselmo',
            'celular' => '1196497-9977',

            'IdadeAtual' => '50',
            'dataNascimento' => '20-07-1972',
            'escolaridade' => 'Ensino Médio',
            'sexo' => 'Masculino',

            'logradouro' => 'Rua Antonio Tocachelli',
            'numero' => '321',
            'bairro' => 'Vila Lucinda',
            'cidade' => 'Itu',
            'estado' => 'São Paulo',
            'cep' => '13309-722',

            'curso' => 'Teclado',
            'periodo' => 'Noite',
            'horario' => '20h as 21h',
            'localDoCurso' => 'Bairro Aparecida',

            'uniforme' => 'G',
            'modelo' => 'Tradicional',

            'image' => 'nullable',

            'usuario' => 'Marquinhos',
            'email' => 'marcos.anselmo@hotmail.com',
            'password' => bcrypt('12345678'),

            'permissao01' => true,
            'permissao02' => true,
            'permissao03' => true,
            'permissao04' => true,
            'permissao05' => true,
            'permissao06' => true,
            'permissao07' => true,
            'permissao08' => true,
            'permissao09' => true,
            'permissao10' => true,

        ]);
    }
}
