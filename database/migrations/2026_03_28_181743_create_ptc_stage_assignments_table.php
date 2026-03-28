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
        Schema::create('ptc_stage_assignments', function (Blueprint $table) {
            $table->increments('assignment_id');
            $table->unsignedInteger('ptc_stage_line_id')->index();
            $table->unsignedInteger('person_id')->index();
            $table->unsignedInteger('role_id')->nullable()->index();
            $table->integer('assigned_qty');
            $table->integer('completed_qty')->default(0);
            $table->enum('status', ['assigned', 'in_progress', 'completed'])->default('assigned')->index();
            $table->dateTime('assigned_date')->nullable();
            $table->dateTime('completion_date')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();

            $table->foreign('ptc_stage_line_id')->references('ptc_stage_line_id')->on('ptc_stage_lines');
            $table->foreign('person_id')->references('person_id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptc_stage_assignments');
    }
};
