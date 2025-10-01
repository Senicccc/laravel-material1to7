<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KaryawanFactory extends Factory
{
    // Data dummy otomatis
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(), // nama random
            'jabatan' => $this->faker->jobTitle(), // jabatan random
            'umur' => $this->faker->numberBetween(20, 60), // umur random
        ];
    }
}