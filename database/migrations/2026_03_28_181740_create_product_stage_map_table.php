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
        Schema::create('product_stage_map', function (Blueprint $table) {
            $table->increments('map_id');
            $table->unsignedInteger('product_id')->index();
            $table->unsignedInteger('stage_id')->index();
            $table->integer('sequence_no');
            $table->timestamps();

            $table->unique(['product_id', 'stage_id']);
            $table->foreign('product_id')->references('item_id')->on('items');
            $table->foreign('stage_id')->references('stage_id')->on('production_stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_stage_map');
    }
};
