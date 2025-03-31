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
        Schema::create('fgoal', function (Blueprint $table) {
            $table->id();
            $table->string('goal_name')->nullable();
            $table->string('target_amount')->nullable();
            $table->date('target_date')->nullable();
            $table->string('type_of_goal')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fgoal');
    }
};