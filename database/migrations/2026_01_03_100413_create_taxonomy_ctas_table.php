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
        Schema::create('taxonomy_ctas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->string('button_name')->nullable();
            $table->integer('has_button')->default(0);
            $table->integer('is_link_out')->default(0);
            $table->text('link')->nullable();
            $table->integer('sequence')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxonomy_ctas');
    }
};
