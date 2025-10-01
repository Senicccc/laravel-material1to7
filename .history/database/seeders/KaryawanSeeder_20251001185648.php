<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        ]
    
        return [
        'nama' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'jabatan' => $this->faker->jobTitle(),
        'gaji' => $this->faker->numberBetween(3000000, 10000000),
    ];);
    }
}