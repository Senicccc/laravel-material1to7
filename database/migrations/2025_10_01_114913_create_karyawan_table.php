<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Membuat tabel karyawan
    public function up(): void
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id(); // id auto increment
            $table->string('nama'); // kolom nama
            $table->string('jabatan'); // kolom jabatan
            $table->integer('umur'); // kolom umur
            $table->timestamps(); // created_at & updated_at
        });
    }

    // Jika rollback, hapus tabel
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};