<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // doctor_specialty
        Schema::create('doctor_specialty', function (Blueprint $table) {
            $table->uuid('doctor_id');
            $table->uuid('specialty_id');

            $table->primary(['doctor_id', 'specialty_id']);

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('specialty_id')->references('id')->on('specialties')->onDelete('cascade');
        });

        // doctor_sub_specialty
        Schema::create('doctor_sub_specialty', function (Blueprint $table) {
            $table->uuid('doctor_id');
            $table->uuid('sub_specialty_id');

            $table->primary(['doctor_id', 'sub_specialty_id']);

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('sub_specialty_id')->references('id')->on('sub_specialties')->onDelete('cascade');
        });

        // doctor_h_m_o
        Schema::create('doctor_h_m_o', function (Blueprint $table) {
            $table->uuid('doctor_id');
            $table->uuid('h_m_o_id');

            $table->primary(['doctor_id', 'h_m_o_id']);

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('h_m_o_id')->references('id')->on('h_m_o_s')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_h_m_o');
        Schema::dropIfExists('doctor_sub_specialty');
        Schema::dropIfExists('doctor_specialty');
    }
};
