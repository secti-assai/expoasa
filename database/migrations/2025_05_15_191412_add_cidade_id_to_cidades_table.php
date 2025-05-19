<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->string('cidade_id')->nullable()->unique()->after('id');
        });
        
        // Gerar IDs para cidades existentes
        DB::table('cidades')->orderBy('id')->each(function ($cidade) {
            DB::table('cidades')
                ->where('id', $cidade->id)
                ->update(['cidade_id' => 'CID-' . rand(1000, 9999)]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->dropColumn('cidade_id');
        });
    }
};
