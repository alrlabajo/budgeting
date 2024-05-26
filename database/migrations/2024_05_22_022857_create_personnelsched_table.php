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
        Schema::create('personnelsched', function (Blueprint $table) {
            $table->string('college_office');
            $table->string('grade_step');
            $table->string('position');
            $table->string('name_incumbent');
            $table->decimal('actual_salary', 10, 2);
            $table->decimal('proposed_salary', 10, 2);
            $table->decimal('increase', 10, 2);
            $table->decimal('sub_total', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnelsched');
    }
};
