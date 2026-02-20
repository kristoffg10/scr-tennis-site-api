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
        Schema::create('section_benefits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('parent_id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->enum('type', ['medical', 'agent']);
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
        Schema::dropIfExists('section_benefits');
    }
};
