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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Kolom untuk nama
            $table->string('slug')->unique(); // Kolom untuk slug (unik)
            $table->string('image')->nullable(); // Kolom untuk gambar (opsional)
            $table->integer('progress')->default(0); // Kolom untuk progres (dengan default 0)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
