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
        Schema::create('temp_bookings', function (Blueprint $table) {
            $table->uuid('id');
            $table->text('doctor');
            $table->text('first_name');
            $table->text('last_name');
            $table->text('birthday');
            $table->text('contact_number');
            $table->text('email');
            $table->text('hmo')->nullable();
            $table->text('appointment_date');
            $table->text('second_appointment');
            $table->text('secretary_email');
            $table->text('location');
            $table->boolean('secretary_sent')->default(false);
            $table->boolean('admin_sent')->default(false);
            $table->boolean('patient_sent')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.f
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_bookings');
    }
};
