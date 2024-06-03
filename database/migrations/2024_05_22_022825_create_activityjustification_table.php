<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('activityjustification', function (Blueprint $table) {
            $table->integerIncrements('activityjustification_id');
            $table->string('college_office');
            $table->string('statement_major');
            $table->string('statement_specific');
            $table->string('activity_justification');
            $table->integer('estimated_no_students');
            $table->decimal('total_cost', 10, 2);
            $table->decimal('cost_per_student', 10, 2);
            $table->string('method_accomplishing');
            $table->decimal('services_budget', 10, 2)->default(0);
            $table->decimal('mooe_budget', 10, 2)->default(0);
            $table->decimal('capital_outlay_budget', 10, 2)->default(0);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('activityjustification');
    }
};