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
        Schema::create('environmet_type', function (Blueprint $table) {
            $table->id();
            $table->string('description')->comment('AULA, TALLER, LABORATORIO, AULA VIRTUAL, AUDITORIO, BIBLIOTECA, CAMPO DEPORTIVO');
            $table->timestamps();
           
        });
    }

   
       
      
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
