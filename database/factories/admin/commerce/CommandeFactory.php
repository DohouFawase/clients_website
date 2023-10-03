<?php

namespace Database\Factories\admin\commerce;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\commerce\Commande>
 */
class CommandeFactory extends Factory
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
            "user_id" => function(){
                return User::factory()->create()->id;
            },
            "statut" => $this->faker->randomElement(["en cours", "expedié","livré"]),
            "date_cmd" => $this->faker->date(),
            "adr_livr"=>$this->faker->address()
        ];
    }
}
