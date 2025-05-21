<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('avaliador_id');
            $table->unsignedBigInteger('equipe_id');
            $table->integer('nota_criatividade');
            $table->integer('nota_apresentacao');
            $table->integer('nota_viabilidade');
            $table->integer('nota_total');
            $table->text('comentarios')->nullable();
            $table->timestamps();
            
            $table->foreign('avaliador_id')->references('id')->on('avaliadores');
            $table->foreign('equipe_id')->references('id')->on('equipes');
            
            // Garantir que um avaliador só avalie uma equipe uma vez
            $table->unique(['avaliador_id', 'equipe_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes');
    }
}
