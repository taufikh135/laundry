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
        Schema::create('types', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('category_code');
            $table->boolean('kiloan')->default(false);
            $table->string('name');
            $table->string('image_path');
            $table->string('description')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');

            $table
                ->foreign('category_code')
                ->references('code')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
