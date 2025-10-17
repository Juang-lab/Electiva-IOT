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
        Schema::create('departments', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name');   // nombre del departamento
            $table->string('code');   // código DANE u otro
            $table->string('abbrev'); // abreviatura
            $table->boolean('status')->default(true); // activo/inactivo

            // Relación con countries
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')
                  ->references('id')
                  ->on('countries')
                  ->onDelete('cascade');

            // Soft delete y timestamps
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};