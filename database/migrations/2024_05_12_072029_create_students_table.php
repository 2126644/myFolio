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
        Schema::create('students', function (Blueprint $table) { // 'students'. table auto plural eventho we create it singular in model name
            $table->id();
            $table->string('matric_id', 8);
            $table->string('first_name', 30);
            $table->string('last_name', 20);
            $table->string('email')->unique();
            $table->string('phone_no', 25);
            $table->timestamps(); // will create 2 attributes. created at & updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
