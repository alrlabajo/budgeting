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
        Schema::create('amendment', function (Blueprint $table) {
            $table->integer('plan_no_revised');
            $table->date('date_revision');
            $table->decimal('planned_amount', 10, 2);
            $table->date('date_submission');
            $table->integer('item_No');
            $table->string('description');
            $table->integer('quantity');
            $table->string('unit');
            $table->decimal('unit_cost', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->integer('procurement_quantity');
            $table->decimal('procurement_amount', 10, 2);
            $table->string('procurement_justification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amendment');
    }
};
