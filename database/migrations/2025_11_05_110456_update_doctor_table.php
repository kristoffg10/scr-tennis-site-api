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
        Schema::table('doctors', function (Blueprint $table) {
            $table->boolean('by_appointment')->after('years')->nullable();
            $table->boolean('walk_in')->after('by_appointment')->nullable();
            $table->boolean('accept_international_insurance')->after('teleconsult')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('by_appointment');
            $table->dropColumn('walk_in');
            $table->dropColumn('accept_international_insurance');
        });
    }
};
