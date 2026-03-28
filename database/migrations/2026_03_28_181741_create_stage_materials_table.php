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
        Schema::create('stage_materials', function (Blueprint $table) {
            $table->increments('stage_material_id');
            $table->unsignedInteger('map_id')->index();
            $table->unsignedInteger('material_item_id')->index();
            $table->decimal('qty_per_unit', 12, 3);
            $table->boolean('mandatory')->default(true);
            $table->unsignedInteger('unit_id')->nullable()->index();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('map_id')->references('map_id')->on('product_stage_map');
            $table->foreign('material_item_id')->references('item_id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_materials');
    }
};
