<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancaCidadeVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banca_cidade_vinculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banca_cidade_id'); // ID da cidade que possui a banca avaliadora
            $table->unsignedBigInteger('cidade_avaliada_id'); // ID da cidade sendo avaliada
            $table->timestamps();
            
            // Chaves estrangeiras
            $table->foreign('banca_cidade_id')->references('id')->on('cidades')->onDelete('cascade');
            $table->foreign('cidade_avaliada_id')->references('id')->on('cidades')->onDelete('cascade');
            
            // Índices e constraints
            $table->unique(['banca_cidade_id', 'cidade_avaliada_id'], 'vinculo_unico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banca_cidade_vinculos');
    }
}
