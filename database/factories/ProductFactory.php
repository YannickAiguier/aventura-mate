<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->text(25),
            'description' => $this->faker->text(250),
            'price' => $this->faker->numberBetween(1,1000),
            'weight' => $this->faker->numberBetween(2,1000),
            'vat' => $this->faker->numberBetween(0.01,1),
            'stock' => $this->faker->numberBetween(0,9999),
            'categories_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
