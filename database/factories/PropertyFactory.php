<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(100000, 155000),
            'location' => $this->faker->city,
            'surface' => $this->faker->numberBetween(75, 135),
            'roomNumber' => $this->faker->numberBetween(3,6),
            'condition' => $this->faker->randomElement(['Neuf', 'Abandonné', 'Récemment rénové']),
            'constructionYear' => $this->faker->numberBetween(2000, 2021),
            'description' => $this->faker->paragraph(rand(5, 10)),
        ];
    }
}
