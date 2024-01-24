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
        Schema::create('location_table', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Lugar de formacion');
            $table->string('addres')->comment('Direccion');
            $table->string('status')->comment('ESTADO:ACTIVA, INACTIVO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location');
    }
};
