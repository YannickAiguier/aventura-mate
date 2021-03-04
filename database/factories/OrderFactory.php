<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->numberBetween(1,10),
            'creation_date' => $this->faker->date(),
            'delivery_date' => $this->faker->date(),
            'users_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
