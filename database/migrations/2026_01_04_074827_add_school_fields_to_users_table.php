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
            $table->string('school_name')->nullable()->after('name');
            $table->string('position')->nullable()->after('school_name');
            $table->string('whatsapp_number')->nullable()->after('position');
            $table->text('school_address')->nullable()->after('whatsapp_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['school_name', 'position', 'whatsapp_number', 'school_address']);
        });
    }
};
