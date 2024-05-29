<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBurTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bur', function (Blueprint $table) {
            $table->date('date');
            $table->string('payee');
            $table->string('office');
            $table->string('address');
            $table->string('responsibility_center');
            $table->string('account_code');
            $table->string('particulars');
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bur');
    }
};
