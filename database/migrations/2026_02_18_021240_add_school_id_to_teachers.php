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
        Schema::table('users', function (Blueprint $table) {
            // Tambahkan school_id untuk menghubungkan guru dengan sekolah
            // Ini untuk user dengan role='guru' saja
            $table->foreignId('school_id')->nullable()->after('role')
                  ->constrained('users')->onDelete('cascade')
                  ->comment('ID sekolah yang memiliki guru ini (untuk role guru)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['school_id']);
            $table->dropColumn('school_id');
        });
    }
};
