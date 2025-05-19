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
        Schema::table('cidades', function (Blueprint $table) {
            $table->string('prefeito_nome')->nullable()->after('representante_telefone');
            $table->string('prefeito_email')->nullable()->after('prefeito_nome');
            $table->string('prefeito_telefone')->nullable()->after('prefeito_email');
            $table->string('secretario_nome')->nullable()->after('prefeito_telefone');
            $table->string('secretario_email')->nullable()->after('secretario_nome');
            $table->string('secretario_telefone')->nullable()->after('secretario_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->dropColumn([
                'prefeito_nome',
                'prefeito_email',
                'prefeito_telefone',
                'secretario_nome',
                'secretario_email',
                'secretario_telefone',
            ]);
        });
    }
};
