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
        Schema::create('ptc_stage_lines', function (Blueprint $table) {
            $table->increments('ptc_stage_line_id');
            $table->unsignedInteger('ptc_id')->index();
            $table->unsignedInteger('stage_id')->index();
            $table->integer('sequence_no');
            $table->integer('planned_qty')->nullable();
            $table->integer('issued_qty')->default(0);
            $table->integer('received_qty')->default(0);
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending')->index();
            $table->timestamps();

            $table->foreign('ptc_id')->references('ptc_id')->on('ptc_headers');
            $table->foreign('stage_id')->references('stage_id')->on('production_stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptc_stage_lines');
    }
};
