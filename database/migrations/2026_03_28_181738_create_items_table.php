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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_code', 50)->unique();
            $table->string('item_name', 150);
            $table->enum('item_type', ['raw_material', 'finished_product', 'semi_finished_product'])->index();
            $table->unsignedInteger('unit_id')->index();
            $table->boolean('is_purchasable')->default(false);
            $table->boolean('is_manufacturable')->default(false);
            $table->boolean('is_sellable')->default(false);
            $table->boolean('can_be_used_as_material')->default(false);
            $table->enum('status', ['active', 'inactive'])->default('active')->index();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
