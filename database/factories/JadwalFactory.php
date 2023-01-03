<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jadwal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'No' => $this->faker->randomDigitNotNull,
        'Matkul' => $this->faker->word,
        'Keterangan' => $this->faker->word,
        'Jam' => $this->faker->randomDigitNotNull,
        'Ruangan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
