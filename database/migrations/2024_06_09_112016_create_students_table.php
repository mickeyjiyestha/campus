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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Phone');
            $table->string('Address');
            $table->string('Birth');
            $table->string('Mother_Name');
            $table->string('Father_Name');
            $table->string('Religion');
            $table->timestamps();
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