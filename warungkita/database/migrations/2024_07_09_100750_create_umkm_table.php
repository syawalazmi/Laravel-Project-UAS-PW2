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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->double('modal');
            $table->string('pemilik', 45);
            $table->string('alamat', 100);
            $table->string('website', 45);
            $table->string('email', 45);
            $table->foreignId('kab_kota_id')->constrained('kab_kota')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rating');
            $table->foreignId('kategori_umkm_id')->constrained('kategori_umkm')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pembina_id')->constrained('pembina')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};