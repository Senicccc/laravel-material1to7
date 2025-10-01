<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Seeder ini digunakan untuk mengisi tabel karyawan dengan data awal.
     * Bisa manual (DB::table->insert) atau otomatis pakai factory.
     */
    public function run(): void
    {
        // Insert data manual
        DB::table('karyawan')->insert([
            [
                'nama' => 'Andi',
                'jabatan' => 'Manager',
                'umur' => 35,
            ],
            [
                'nama' => 'Budi',
                'jabatan' => 'Staff',
                'umur' => 28,
            ],
            [
                'nama' => 'Citra',
                'jabatan' => 'Supervisor',
                'umur' => 30,
            ],
        ]);

        // Pakai factory untuk generate 10 data random tambahan
        Karyawan::factory()->count(10)->create();
    }
}