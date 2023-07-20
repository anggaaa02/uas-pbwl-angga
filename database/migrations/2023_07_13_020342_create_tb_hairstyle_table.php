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
        Schema::create('tb_hairstyle', function (Blueprint $table) {
            $table->increments('style_id');
            $table->string('style_name', 100);
            $table->string('style_jenis', 50);
            $table->string('style_harga', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_hairstyle');
    }
};
