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
        Schema::create('stok_darahs', function (Blueprint $table) {
            $table->id('id_stokdarah');
            $table->integer('id_namaudd');
            $table->integer('golda_a');
            $table->integer('golda_b');
            $table->integer('golda_ab');
            $table->integer('golda_o');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_darahs');
    }
};
