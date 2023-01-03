<?php

namespace Database\Factories;

use App\Models\Informasi;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Informasi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'No' => $this->faker->randomDigitNotNull,
        'Fakultas' => $this->faker->word,
        'Prodi' => $this->faker->word,
        'Kelas' => $this->faker->word,
        'Keterangan' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
