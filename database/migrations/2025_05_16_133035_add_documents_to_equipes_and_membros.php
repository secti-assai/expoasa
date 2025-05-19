<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->string('doc_termo_aceite_path')->nullable();
            $table->string('doc_termo_dados_path')->nullable();
            $table->string('doc_termo_imagem_path')->nullable();
        });

        Schema::table('membros', function (Blueprint $table) {
            $table->string('doc_termo_aceite_path')->nullable();
            $table->string('doc_termo_dados_path')->nullable();
            $table->string('doc_termo_imagem_path')->nullable();
        });
    }

    public function down()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->dropColumn([
                'doc_termo_aceite_path',
                'doc_termo_dados_path',
                'doc_termo_imagem_path'
            ]);
        });

        Schema::table('membros', function (Blueprint $table) {
            $table->dropColumn([
                'doc_termo_aceite_path',
                'doc_termo_dados_path',
                'doc_termo_imagem_path'
            ]);
        });
    }
};