<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dish_id')->constrained()->onDelete('cascade');
            $table->foreignId('participant_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            // Garantir que cada participante vote apenas uma vez
            $table->unique('participant_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('votes');
    }
};