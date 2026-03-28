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
        Schema::create('ptc_headers', function (Blueprint $table) {
            $table->increments('ptc_id');
            $table->string('ptc_number', 50)->unique();
            $table->unsignedInteger('product_id')->index();
            $table->string('size', 50)->nullable();
            $table->integer('quantity');
            $table->unsignedInteger('start_stage_id')->nullable()->index();
            $table->unsignedInteger('end_stage_id')->nullable()->index();
            $table->enum('status', ['pending', 'in_progress', 'completed', 'cancelled'])->default('pending')->index();
            $table->enum('priority', ['low', 'medium', 'high'])->default('medium')->index();
            $table->string('batch_number', 50)->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('item_id')->on('items');
            $table->foreign('start_stage_id')->references('stage_id')->on('production_stages');
            $table->foreign('end_stage_id')->references('stage_id')->on('production_stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptc_headers');
    }
};
