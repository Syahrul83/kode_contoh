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
        Schema::create('supplayers', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100)->nullable();
            $table->string('alamat',100)->nullable();
            $table->string('bidang',100)->nullable();
            $table->integer('id_supplayer')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplayers');
    }
};
