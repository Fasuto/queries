<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(200),
            'quantity' => $this->faker->randomFloat(2,10,100),
            'unit_price' => $this->faker->randomFloat(2,10,1000),
            'total' => 0,
            'product_id' => random_int(1,100),
            'bill_id' => random_int(1,1000),
        ];
    }
}
