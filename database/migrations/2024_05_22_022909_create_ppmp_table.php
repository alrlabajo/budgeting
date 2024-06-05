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
        Schema::create('ppmp', function (Blueprint $table) {
            $table->integerincrements('ppmp_id');
            $table->string('college_office');
            $table->string('program_title');
            $table->string('project_title');
            $table->string('type_contract');
            $table->string('account_title');
            $table->string('item_name');
            $table->string('unit_issue');
            $table->decimal('unit_price', 10, 2);
            $table->integer('quantity');
            $table->string('account_code');
            $table->string('description');
            $table->string('procurement_method');
            $table->decimal('estimated_budget', 10, 2);
            $table->json('selected_months')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppmp', function (Blueprint $table){
            $table->dropColumn('selected_months');
        });
    }
};
