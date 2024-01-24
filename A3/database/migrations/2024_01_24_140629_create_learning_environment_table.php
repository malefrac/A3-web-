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
        Schema::create('learning_environment', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre del ambiente');
            $table->integer('capacity')->nullable()->comment('Capacidad');
            $table->integer('area_mt2')->nullable()->comment('Area en mt2');
            $table->integer('floor')->comment('Piso');
            $table->integer('inventory')->comment('Inventario');
            $table->foreignId('id_type')->constrained('environmet_type');
            $table->foreignId('id_location')->constrained('location');
            $table->string('status')->comment('Estado: ACTIVO, INACTIVO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_environment');
    }
};
