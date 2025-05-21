<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAvaliacoesTableScoringSystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('avaliacoes', function (Blueprint $table) {
            // Modificar as colunas existentes
            $table->renameColumn('nota_criatividade', 'A_criatividade_inovacao');
            $table->renameColumn('nota_apresentacao', 'B_qualidade_apresentacao');
            $table->renameColumn('nota_viabilidade', 'C_impacto_sociedade');
            
            // Adicionar nova coluna para o critério D
            $table->integer('D_aderencia_ODS')->default(0);
            
            // Ajustar a escala da nota total para 0-100
            // Não precisamos alterar a coluna nota_total pois o cálculo será atualizado no código
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->renameColumn('A_criatividade_inovacao', 'nota_criatividade');
            $table->renameColumn('B_qualidade_apresentacao', 'nota_apresentacao');
            $table->renameColumn('C_impacto_sociedade', 'nota_viabilidade');
            $table->dropColumn('D_aderencia_ODS');
        });
    }
}
