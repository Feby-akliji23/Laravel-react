<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Wilayah;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bencana>
 */
class BencanaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'wilayah_id' => Wilayah::inRandomOrder()->first()->id,
            'kib'        => $this->faker->randomNumber(8, true),
            'kejadian'   => $this->faker->sentence,
            'detail'     => $this->faker->paragraph,
            'tanggal'    => $this->faker->date('Y-m-d', '2024-12-31'),
        ];
    }
}
