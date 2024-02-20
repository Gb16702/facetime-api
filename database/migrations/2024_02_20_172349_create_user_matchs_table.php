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
        Schema::create('user_matchs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_a_id');
            $table->unsignedBigInteger('user_b_id');
            $table->timestamps();

            $table->foreign('user_a_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_b_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_matchs');
    }
};
