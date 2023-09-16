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
        Schema::create('user_diets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                'users'
            )->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('diet_id')->constrained(
                'diets'
            )->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_diets');
    }
};
