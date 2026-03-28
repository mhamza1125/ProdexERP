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
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('txn_id');
            $table->dateTime('txn_date');
            $table->enum('txn_type', ['stock_in', 'stock_out', 'purchase', 'sale', 'wage', 'adjustment'])->index();
            $table->enum('reference_type', ['order', 'ptc', 'purchase', 'other'])->nullable()->index();
            $table->unsignedInteger('reference_id')->nullable()->index();
            $table->unsignedInteger('item_id')->index();
            $table->decimal('quantity', 12, 3);
            $table->decimal('amount', 12, 2)->nullable();
            $table->unsignedInteger('account_id')->nullable()->index();
            $table->unsignedInteger('person_id')->nullable()->index();
            $table->text('remarks')->nullable();
            $table->timestamps();

            $table->foreign('item_id')->references('item_id')->on('items');
            $table->foreign('person_id')->references('person_id')->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
