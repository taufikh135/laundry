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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number_phone')->unique();
            $table->string('address');
            $table->timestamp('number_phone_verified_at')->nullable();
            $table->bigInteger('point')->unsigned()->default(0);
            $table->enum('role', ['Admin', 'Pelanggan', 'Owner'])->default('Pelanggan');
            $table->enum('status', ['Active', 'Inactive', 'Banned'])->default('Active');
            $table->string('reset_password_token')->nullable();
            $table->string('number_phone_verified_token')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('sessions');
    }
};
