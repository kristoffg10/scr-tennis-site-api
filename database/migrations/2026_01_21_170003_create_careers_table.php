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
        Schema::create('careers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->string('department');
            $table->string('arrangement');
            $table->longText('address');
            $table->longText('benefits');
            $table->longText('responsibilities');
            $table->longText('qualifications');
            $table->timestamp('date');
            $table->longText('slug');
            $table->integer('enabled')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
