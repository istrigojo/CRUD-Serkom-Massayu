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
        Schema::create('asesmen', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('nomorinduk');
            $table->string('nomorpeserta')->unique();
            $table->enum('hasil', ['k', 'bk']); //k = kompeten, bk= belum kompeten
            $table->foreignId('id_skema')->referencec('id')->on('skema')->onDelete('cascase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesmen');
    }
};
