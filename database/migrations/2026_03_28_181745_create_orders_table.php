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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->string('order_number', 50)->unique();
            $table->enum('order_type', ['purchase', 'sale'])->index();
            $table->unsignedInteger('person_id')->index();
            $table->dateTime('order_date');
            $table->enum('status', ['pending', 'in_progress', 'completed', 'cancelled'])->default('pending')->index();
            $table->decimal('total_amount', 12, 2)->nullable();
            $table->dateTime('due_date')->nullable();
            $table->timestamps();

            $table->foreign('person_id')->references('person_id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
