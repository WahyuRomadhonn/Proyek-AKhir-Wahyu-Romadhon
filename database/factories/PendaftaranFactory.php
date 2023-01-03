<?php

namespace Database\Factories;

use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendaftaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pendaftaran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'No' => $this->faker->randomDigitNotNull,
        'Nama' => $this->faker->word,
        'Kota' => $this->faker->word,
        'Jenis_Kelamin' => $this->faker->word,
        'Email' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
