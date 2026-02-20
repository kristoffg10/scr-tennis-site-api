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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->longText('customer_care_contact')->nullable();
            $table->longText('telemedicine_hotline')->nullable();
            $table->longText('facebook')->nullable();
            $table->longText('instagram')->nullable();
            $table->longText('linkedin')->nullable();
            $table->longText('youtube')->nullable();
            $table->longText('address')->nullable();
            $table->longText('address_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
