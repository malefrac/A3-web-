<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instructor', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('sena_email')->unique()->comment('correo sena');
            $table->string('personal_email')->unique()->comment('correo personal');
            $table->string('phone')->nullable()->comment('Telefono');
            $table->string('password')->comment('contraseña de acceso');
            $table->string('type')->comment('Tipo:Contratista-Planta');
            $table->string('profile')->comment('Perfil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor');
    }
};
