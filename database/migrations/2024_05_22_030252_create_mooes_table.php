<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMooesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mooes', function (Blueprint $table) {
            $table->integerincrements('mooe_id');
            $table->string('college_office');
            $table->string('account_code');
            $table->string('item');
            $table->decimal('budget', 10, 2);
            $table->string('justification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mooe');
    }
};