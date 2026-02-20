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
        Schema::table('events', function (Blueprint $table) {
            // Tennis-specific
            $table->string('match_type')->nullable()->after('event_type'); // singles, doubles, mixed
            $table->string('format')->nullable()->after('match_type');     // round_robin, knockout, ladder, timed_play
            $table->string('scoring_format')->nullable()->after('format'); // e.g. 1 set, 8-game pro set
            // Host & management
            $table->string('assigned_coach')->nullable()->after('scoring_format');
            $table->string('event_status')->nullable()->after('assigned_coach'); // draft, published, cancelled, completed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['match_type', 'format', 'scoring_format', 'assigned_coach', 'event_status']);
        });
    }
};
