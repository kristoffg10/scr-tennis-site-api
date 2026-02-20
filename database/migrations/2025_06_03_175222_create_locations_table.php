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
        Schema::create('locations', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug');
            $table->string('abbreviation');
            $table->string('email')->nullable();
            $table->string('contact_number');
            $table->string('local')->nullable();
            $table->string('address');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('doctor_availabilities', function (Blueprint $table) {
            $table->foreignUuid('location_id')->after('doctor_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('doctor_availabilities', function (Blueprint $table) {
            $table->dropForeign(['location_id']);
            $table->dropColumn('location_id');
        });

        Schema::dropIfExists('locations');
    }
};
