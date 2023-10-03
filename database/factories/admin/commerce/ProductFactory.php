<?php

namespace Database\Factories\admin\commerce;

use App\Models\admin\commerce\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\commerce\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "product_name" => $this->faker->word(),
            "description" => $this->faker->paragraph(),
            "price" => $this->faker->randomFloat(2, 10, 1000),
            "stock" => $this->faker->numberBetween(0, 100),
            "image" =>$this->faker->imageUrl(),
            "category_id"=>function() {
                return Categorie::factory()->create()->id;
            },
            "date"=>$this->faker->date(),
        ];
    }
}
