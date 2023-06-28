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
        Schema::create('mensalidade', function (Blueprint $table) {
            $table->id();
            
            $table->string('firstName')->nullable(true);
            $table->string('lastName')->nullable(true);

            $table->string('mesRef');
            $table->string('valorPag'); 
            $table->string('formaPag');
            $table->string('dataPag');   

            $table->string('valorMensal');   
            $table->string('dataInicio');
            $table->string('dataTermino');
            $table->string('dataVencimento');
            $table->string('qtdParcelas');
            $table->string('parcelasRestante');
            $table->string('parcelasEmAtraso');
            $table->string('imagem')->nullable();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            // $table->unsignedBigInteger('id_meses');
            // $table->foreign('id_meses')->references('id')->on('meses')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('mensalidade');
    }
};
