<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cidade_id')->constrained('cidades')->onDelete('cascade');
            $table->string('nome');
            $table->string('modalidade');
            $table->string('instituicao')->nullable();
            $table->string('responsavel_nome');
            $table->string('responsavel_email');
            $table->string('responsavel_telefone');
            $table->integer('equipe_id')->unique(); // ID sequencial para equipe
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipes');
    }
}