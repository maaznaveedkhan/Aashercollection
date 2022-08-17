<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'category_id' => 3,
            'name' => $this->faker->name(),
            'short_description' => $this->faker->paragraph($nb =2),
            'long_description'=> $this->faker->paragraph($nb =8),
            'price' => $this->faker->numberBetween($min = 500, $max = 3000),
            'discounted_price' => $this->faker->numberBetween($min = 500, $max = 2000),
            'product_thumbnail' => 'womentest.jpg',
            'product_images' => '["womentest.jpg"]',
            'gender' => '',
            'size' => '8',
            'color' => 'purple',
            'delivery_charges' =>$this->faker->numberBetween($min = 150, $max = 500),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ];
    }
}
