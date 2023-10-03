<?php

namespace Database\Factories\admin\commerce;

use App\Models\admin\commerce\Commande;
use App\Models\admin\commerce\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\commerce\CmdDetail>
 */
class CmdDetailFactory extends Factory
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
            "cmd_id"=>function() {
                return Commande::factory()->create()->id;
            },
            "product_id"=>function() {
                return Product::factory()->create()->id;
            },

            "prix_unit" =>$this->faker->randomFloat(2, 10, 1000),
            "quantité" =>$this->faker->numberBetween(10, 100)
        ];
    }
}
