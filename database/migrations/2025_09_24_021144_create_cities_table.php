<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('abbrev');
            $table->boolean('status')->default(true);

            // Relación con departments
            $table->unsignedBigInteger('id_department');
            $table->foreign('id_department')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade');

            // Soft delete y timestamps
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};