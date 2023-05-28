<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    public function definition(): array
    {
        

        return [
            'product_name'=> $this->faker->name(),
            'price'=> $this->faker->numberBetween($min = 0, $max = 10000), 
            'quantity'=> $this->faker->numberBetween($min = 0, $max = 100),
            'description'=>$this->faker->text($maxNbChars = 30),
            'created_at'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'updated_at'=>$this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
