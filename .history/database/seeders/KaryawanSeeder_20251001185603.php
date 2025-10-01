<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}