<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('id_station');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

         
            $table->foreign('id_station')->references('id')->on('stations')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};