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
        Schema::create('frequenciaaulas', function (Blueprint $table) {
            $table->id();

            $table->string('firstName')->nullable(true);
            $table->string('lastName')->nullable(true);
            $table->string('diaDaSemana'); 
            $table->string('meses'); 
            $table->string('presente'); 
            $table->string('ausente');
            $table->string('date');
           
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
        Schema::dropIfExists('frequenciaaulas');
    }
};
