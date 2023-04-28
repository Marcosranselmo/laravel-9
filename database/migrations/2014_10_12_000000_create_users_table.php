<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('ativo')->default(0);
            $table->string('firstName')->nullable(true);
            $table->string('lastName')->nullable(true);
            $table->char('celular', 15)->nullable(true);

            $table->string('IdadeAtual');
            $table->char('dataNascimento');
            $table->string('escolaridade');
            $table->string('sexo');

            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');

            $table->string('curso');
            $table->string('periodo');
            $table->string('horario');
            $table->string('localDoCurso');

            $table->string('uniforme');
            $table->string('modelo');

            $table->string('image')->nullable();

            $table->string('usuario')->nullable(true); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            
            $table->boolean('permissao01')->default(0);
            $table->boolean('permissao02')->default(0);
            $table->boolean('permissao03')->default(0);
            $table->boolean('permissao04')->default(0);
            $table->boolean('permissao05')->default(0);
            $table->boolean('permissao06')->default(0);
            $table->boolean('permissao07')->default(0);
            $table->boolean('permissao08')->default(0);
            $table->boolean('permissao09')->default(0);
            $table->boolean('permissao10')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
