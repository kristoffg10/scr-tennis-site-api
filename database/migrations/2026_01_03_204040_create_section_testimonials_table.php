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
        Schema::create('section_testimonials', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('parent_id');
            $table->string('name');
            $table->string('position');
            $table->string('company');
            $table->string('content');
            $table->integer('sequence')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_testimonials');
    }
};
