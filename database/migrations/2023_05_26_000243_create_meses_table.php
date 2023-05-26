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
        Schema::create('meses', function (Blueprint $table) {
            $table->id();
            $table->string('Janeiro');
            $table->string('Fevereiro');
            $table->string('Março');
            $table->string('Abril');
            $table->string('Maio');
            $table->string('Junho');
            $table->string('Julho');
            $table->string('Agosto');
            $table->string('Setembro');
            $table->string('Outubro');
            $table->string('Novembro');
            $table->string('Dezembro');


            // $table->unsignedBigInteger('id_alunos');
            // $table->foreign('id_alunos')->references('id')->on('alunos')->onDelete('cascade')->onUpdate('cascade');
 
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
        Schema::dropIfExists('meses');
    }
};
