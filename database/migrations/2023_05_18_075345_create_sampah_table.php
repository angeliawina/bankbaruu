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
        Schema::create('sampahs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('banksampah_id');
             $table->foreign('banksampah_id')->references('id')->on('banksampahs')->onDelete('cascade');
            $table->string('nama');
            $table->string('harga');
            $table->string('foto');

           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sampah');
    }
};
