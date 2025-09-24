<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sensor');
            $table->float('value');
            $table->float('temperature');
            $table->float('humidity');
            $table->boolean('status')->default(true);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            
             $table->foreign('id_sensor')->references('id')->on('sensors')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sensor_data');
    }
};