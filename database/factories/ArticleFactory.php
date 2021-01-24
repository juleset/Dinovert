<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'img' => $this->faker->image(),
            'title' => $this->faker->word,
            'description' => $this->faker->paragraph(rand(5, 10)),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
