<?php

namespace Database\Factories\admin\commerce;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\commerce\Payment>
 */
class PaymentFactory extends Factory
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
            "user_id"=> function(){
              return  User::factory()->create()->id;
            },
            "type_carte"=>$this->faker->creditCardType(),
            "num_cart"=>$this->faker->creditCardNumber(),
            "date_exp"=>$this->faker->creditCardExpirationDate(),
        ];
    }
}
