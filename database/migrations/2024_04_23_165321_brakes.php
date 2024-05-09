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
        Schema::create('brakes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('style',255);
            $table->string('model',255);
            $table->float('price', 8, 2);
            $table->foreignId('proveedor_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brakes');
    }
};
