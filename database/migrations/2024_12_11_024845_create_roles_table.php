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
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('identifier');
            $table->enum('type', ['admin', 'client', 'client-admin', 'customer', 'specialist'])->nullable();
            $table->json('access_to')->nullable();
            $table->integer('editable')->default(1);
            $table->longText('permissions')->nullable();
            $table->longText('permissions_in_store')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignUuid('role_id')->references('id')->on('roles')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
