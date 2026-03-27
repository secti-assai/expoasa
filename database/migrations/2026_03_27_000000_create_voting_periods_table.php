<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('voting_periods', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voting_periods');
    }
};
