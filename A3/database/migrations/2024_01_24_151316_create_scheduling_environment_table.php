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
        Schema::create('scheduling_environment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_course')->constrained('course');
            $table->foreignId('id_instructor')->constrained('instructor');
            $table->date('date_scheduling')->comment('Fecha de planificación');
            $table->time('initial_hour')->comment('Hora inicial');
            $table->time('final_hour')->comment('Hora final');
            $table->foreignId('id_environment')->constrained('learning_environment');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduling_environment');
    }
};
