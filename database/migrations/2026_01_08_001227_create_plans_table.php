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
        Schema::create('plans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->enum('type', ['group', 'individual']);
            $table->string('subtitle')->nullable();
            $table->longText('description')->nullable();
            
            $table->longText('shop_link')->nullable();

            $table->tinyInteger('upgrade_badge')->default(0);
            $table->tinyInteger('plus_badge')->default(0);

            $table->longText('slug');

            $table->integer('sequence')->default(0);
            $table->tinyInteger('enabled')->default(1);
            $table->tinyInteger('featured')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
