<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('estado', 2);
            $table->integer('distancia_categoria');
            $table->string('representante_nome')->nullable();
            $table->string('representante_email')->nullable();
            $table->string('representante_telefone')->nullable();
            $table->string('senha');
            $table->uuid('hash_id');
            $table->boolean('treinamento_requerido')->default(false);
            $table->timestamp('treinamento_agendado')->nullable();
            $table->json('modalidades')->default('[]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};