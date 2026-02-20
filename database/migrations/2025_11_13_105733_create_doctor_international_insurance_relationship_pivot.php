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
        Schema::create('doctor_international_insurance', function (Blueprint $table) {
            $table->uuid('doctor_id');
            $table->uuid('international_insurance_id');

            $table->primary(['doctor_id', 'international_insurance_id']);

            $table->foreign('doctor_id', 'fk_doctor_insurance_doctor')
                ->references('id')
                ->on('doctors')
                ->onDelete('cascade');

            $table->foreign('international_insurance_id', 'fk_doctor_insurance_international')
                ->references('id')
                ->on('international_insurances')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_international_insurance');
    }
};
