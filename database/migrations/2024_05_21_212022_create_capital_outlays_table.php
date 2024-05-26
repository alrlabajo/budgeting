<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitalOutlaysTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('capital_outlays', function (Blueprint $table) {
            $table->string('college_office');
            $table->string('account_code');
            $table->string('items_expenditure');
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
        Schema::dropIfExists('capital_outlays');
    }
}
