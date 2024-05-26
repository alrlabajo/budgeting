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
        Schema::create('appropriations', function (Blueprint $table) {
            $table->string('college_office');
            $table->string('account_code');
            $table->string('items_expenditure');
            $table->decimal('budget', 10, 2);
            $table->string('approved_board');
            $table->decimal('total', 10, 2);
            $table->decimal('obligations', 10,2);
            $table->decimal('unobligated', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appropriations');
    }
};
