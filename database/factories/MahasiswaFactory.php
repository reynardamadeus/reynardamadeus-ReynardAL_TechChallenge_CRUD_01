<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Factory\App\Models\Mahasiswa;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Mahasiswa::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(10),
            'NIM' => $this->faker->text(9),
            'publication_date' => $this->faker->date(),
            'region' => $this->faker->text(8)
        ];
    }
}
