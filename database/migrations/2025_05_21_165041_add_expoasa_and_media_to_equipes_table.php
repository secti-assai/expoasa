<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpoasaAndMediaToEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->boolean('expoasa')->nullable()->after('apresentacao_path');
            $table->decimal('nota_media', 5, 2)->default(0)->after('expoasa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->dropColumn(['expoasa', 'nota_media']);
        });
    }
}
