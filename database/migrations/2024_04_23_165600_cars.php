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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('wheels_id');
            $table->foreign('wheels_id')->references('id')->on('wheels')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('engines_id');
            $table->foreign('engines_id')->references('id')->on('engines')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('suspension_id');
            $table->foreign('suspension_id')->references('id')->on('suspension')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('brakes_id');
            $table->foreign('brakes_id')->references('id')->on('brakes')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('exhaustpipe_id');
            $table->foreign('exhaustpipe_id')->references('id')->on('exhaustpipe')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('lights_id');
            $table->foreign('lights_id')->references('id')->on('lights')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('spoiler_id');
            $table->foreign('spoiler_id')->references('id')->on('spoiler')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('sideskirts_id');
            $table->foreign('sideskirts_id')->references('id')->on('sideskirts')->onUpdate('cascade')->onDelete('cascade');
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
