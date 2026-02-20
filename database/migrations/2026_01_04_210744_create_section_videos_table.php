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
        Schema::create('section_videos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('parent_id');
            $table->string('title')->nullable();
            $table->longText('yt_id')->nullable();
            $table->longText('yt_url')->nullable();
            $table->longText('embed_url')->nullable();
            $table->longText('yt_title')->nullable();
            $table->longText('yt_thumbnail')->nullable();
            $table->timestamp('yt_published_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_videos');
    }
};
