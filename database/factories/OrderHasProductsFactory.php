<?php

namespace Database\Factories;

use App\Models\OrderHasProducts;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderHasProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderHasProducts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(1, 1000),
            'title' => $this->faker->text(25),
            'vat' => $this->faker->numberBetween(0.01,1),
            'weight' => $this->faker->numberBetween(2,1000),
            'products_id' => $this->faker->numberBetween(1,19),
            'orders_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
