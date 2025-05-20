<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('telefone')->nullable(); // Campo de telefone adicionado
            $table->string('senha');
            $table->unsignedBigInteger('cidade_id');
            $table->integer('nivel')->default(1);
            $table->string('tipo')->default('municipal'); // municipal, repescagem, expoasa
            $table->boolean('ativo')->default(true);
            $table->timestamps();
            
            $table->foreign('cidade_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliadores');
    }
}
