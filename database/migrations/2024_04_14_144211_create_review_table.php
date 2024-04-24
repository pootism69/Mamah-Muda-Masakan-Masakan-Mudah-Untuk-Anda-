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
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('reviewId');
            $table->unsignedInteger('userId')->nullable();
            $table->foreign('userId')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
            $table->unsignedInteger('recipeId')->nullable();
            $table->foreign('recipeId')->references('recipeId')->on('user_recipes')->onUpdate('cascade')->onDelete('cascade');;
            $table->string('comment')->nullable();
            $table->smallInteger('rating')->nullable();
            $table->timestampTz('dateReviewed')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
