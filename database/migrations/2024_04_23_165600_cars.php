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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('color',255);
            $table->string('horn',255);
            $table->boolean('post');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('wheel_id');
            $table->foreign('wheel_id')->references('id')->on('wheels')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('engine_id');
            $table->foreign('engine_id')->references('id')->on('engines')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('suspension_id');
            $table->foreign('suspension_id')->references('id')->on('suspensions')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('brake_id');
            $table->foreign('brake_id')->references('id')->on('brakes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('exhaustpipe_id');
            $table->foreign('exhaustpipe_id')->references('id')->on('exhaustpipes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('light_id');
            $table->foreign('light_id')->references('id')->on('lights')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('spoiler_id');
            $table->foreign('spoiler_id')->references('id')->on('spoilers')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('sideskirt_id');
            $table->foreign('sideskirt_id')->references('id')->on('sideskirts')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
