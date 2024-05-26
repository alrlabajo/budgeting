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
        Schema::create('personalservices', function (Blueprint $table) {
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
    public function down(): void
    {
        Schema::dropIfExists('personalservices');
    }
};
