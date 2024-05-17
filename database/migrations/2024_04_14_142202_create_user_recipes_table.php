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
        Schema::create('user_recipes', function (Blueprint $table) {
            $table->increments('recipeId');
            $table->unsignedInteger('userId')->nullable();
            $table->foreign('userId')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
            $table->string('title',50)->nullable();
            $table->mediumText('description')->nullable();
            $table->longText('instruction')->nullable();
            $table->string('origin')->nullable();
            $table->integer('rating')->nullable();
            $table->mediumText('image')->nullable();
            $table->string('timeToCook');
            $table->string('tahun')->nullable();
            $table->string('category')->nullable();
            $table->string('tingkat')->nullable();
            $table->string('ingredient')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_recipes');
    }
};
