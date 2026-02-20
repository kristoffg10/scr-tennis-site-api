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
        Schema::create('doctor_schedule_groups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('doctor_id');
            $table->uuid('location_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('room')->nullable();
            $table->string('email')->nullable();
            $table->string('secretary_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('local')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_schedule_groups');
    }
};
