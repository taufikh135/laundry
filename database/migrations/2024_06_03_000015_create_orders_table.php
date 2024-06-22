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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_id');
            $table->integer('total_price')->unsigned();
            $table->enum('service', ['Antar Jemput', 'Mandiri']);
            $table->enum('status', ['Menunggu Konfirmasi', 'Menunggu Pembayaran', 'Pending', 'Proses', 'Selesai', 'Dibatalkan'])->default('Menunggu Konfirmasi');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
