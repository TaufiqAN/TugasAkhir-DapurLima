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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama_resep');
            $table->text('deskripsi');
            $table->string('kesulitan');
            $table->integer('waktu');
            $table->integer('porsi');
            $table->json('bahan');
            $table->json('cara_membuat');
            $table->foreignId('kategori_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
