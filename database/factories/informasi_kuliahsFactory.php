<?php

namespace Database\Factories;

use App\Models\informasi_kuliahs;
use Illuminate\Database\Eloquent\Factories\Factory;

class informasi_kuliahsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = informasi_kuliahs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
