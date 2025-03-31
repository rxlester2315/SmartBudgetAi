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
       Schema::create('expense_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('expense_id')->constrained()->cascadeOnDelete();
    $table->enum('category', ['food', 'transportation', 'utilities', 'subscriptions']);
    $table->decimal('amount', 10, 2); // Stores values like 130.00
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expense_items');
    }
};