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
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained('users')->onDelete('cascade');
            $table->string('name'); // 10 IPA 1, 11 IPS 2, etc
            $table->integer('grade'); // 1, 2, 3, ..., 12
            $table->string('major')->nullable(); // IPA, IPS, Bahasa, Teknik Informatika, etc
            $table->integer('capacity')->default(30);
            $table->string('academic_year'); // 2024/2025
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            
            $table->unique(['school_id', 'name', 'academic_year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_rooms');
    }
};
