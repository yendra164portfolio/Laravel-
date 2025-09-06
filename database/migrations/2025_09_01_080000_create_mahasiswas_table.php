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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');           // Nama lengkap mahasiswa
            $table->string('nim')->unique()->nullable(); // NIM unik (opsional)
            $table->date('tanggal_lahir')->nullable();   // Tanggal lahir
            $table->text('alamat')->nullable();         // Alamat mahasiswa
            $table->decimal('ipk', 3, 2)->default(1.00); // IPK default 1.00
            $table->timestamps();                        // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
