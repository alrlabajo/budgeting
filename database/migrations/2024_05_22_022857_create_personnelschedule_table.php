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
        Schema::create('personnelschedule', function (Blueprint $table) {
            $table->integerincrements('personnelsched_id');
            $table->string('college_office');
            $table->integer('item_no');
            $table->string('grade_step');
            $table->string('position');
            $table->string('name_incumbent');
            $table->decimal('annual_salary', 12, 2);
            $table->decimal('proposed_salary', 12, 2);
            $table->decimal('increase', 12, 2);
            $table->decimal('total', 12, 2);
            $table->decimal('sub_total', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('personnelschedule');
    }
};
