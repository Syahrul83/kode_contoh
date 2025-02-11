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
        Schema::create('konsumens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konsumen',100)->nullable();
            $table->string('nama_kontak',50)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('kota',55)->nullable();
            $table->integer('kode_pos')->nullable();
            $table->string('negara',50)->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumens');
    }
};
