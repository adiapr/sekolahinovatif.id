<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Update existing users with 'user' role to 'school' role
        DB::table('users')->where('role', 'user')->update(['role' => 'school']);
        
        // Update the default value for future registrations
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('school')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert default role back to 'user'
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('user')->change();
        });
        
        // Optionally revert existing users back to 'user' role
        // DB::table('users')->where('role', 'school')->update(['role' => 'user']);
    }
};
