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
        Schema::create('jadwal_mus', function (Blueprint $table) {
            $table->id('id_jadwalmu');
            $table->integer('id_namaudd');
            $table->string('tempat');
            $table->string('alamat');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('peruntukan');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_mus');
    }
};
