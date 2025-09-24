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
        Schema::create('departaments', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name'); // nombre del departamento
            $table->string('code'); // código DANE u otro
            $table->string('abbrev'); // abreviatura
            $table->boolean('status')->default(true); // activo/inactivo
            $table->unsignedBigInteger('id_country'); // referencia al país
            $table->timestamp('deleted_at')->nullable(); // soft delete
            $table->timestamps(); // created_at y updated_at

            
             $table->foreign('id_country')
             ->references('id')
             ->on('countries')
             ->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('departaments');
    }
};