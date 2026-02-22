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
            $table->string('final_score')->nullable()->after('event_status');
            $table->string('winner_name')->nullable()->after('final_score');
            $table->text('match_notes')->nullable()->after('winner_name');
            $table->string('team_one_label')->nullable()->after('match_notes');
            $table->string('team_two_label')->nullable()->after('team_one_label');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn([
                'final_score',
                'winner_name',
                'match_notes',
                'team_one_label',
                'team_two_label',
            ]);
        });
    }
};
