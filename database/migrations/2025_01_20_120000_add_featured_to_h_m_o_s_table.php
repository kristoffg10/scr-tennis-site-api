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
        Schema::table('h_m_o_s', function (Blueprint $table) {
            $table->boolean('featured')->default(0)->after('enabled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('h_m_o_s', function (Blueprint $table) {
            $table->dropColumn('featured');
        });
    }
};

