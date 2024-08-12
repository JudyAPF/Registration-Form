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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('username', 20)->unique();
            $table->string('sex')->nullable();
            $table->string('mobile_phone', 10)->unique();
            $table->string('tel_no')->nullable();
            $table->date('birth_date');
            $table->string('address', 100);
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('password', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
