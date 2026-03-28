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
        Schema::create('stage_stock', function (Blueprint $table) {
            $table->increments('stage_stock_id');
            $table->unsignedInteger('product_id')->index();
            $table->unsignedInteger('stage_id')->index();
            $table->decimal('quantity', 12, 3)->default(0);
            $table->decimal('reserved_qty', 12, 3)->default(0);
            $table->unsignedInteger('last_updated_by')->nullable()->index();
            $table->timestamps();

            $table->foreign('product_id')->references('item_id')->on('items');
            $table->foreign('stage_id')->references('stage_id')->on('production_stages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stage_stock');
    }
};
