<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotaFinalToEquipes extends Migration
{
    public function up()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->float('nota_final')->default(0);
        });
    }

    public function down()
    {
        Schema::table('equipes', function (Blueprint $table) {
            $table->dropColumn('nota_final');
        });
    }
}