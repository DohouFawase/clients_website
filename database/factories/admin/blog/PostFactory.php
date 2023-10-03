<?php

namespace Database\Factories\admin\blog;

use App\Models\admin\blog\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin\blog\Post>
 */
class PostFactory extends Factory
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
            "title" => $this->faker->word(),
            "contenu" => $this->faker->paragraph(),
            "post_img" => $this->faker->imageUrl(),
            "author" => $this->faker->userName(),
            "date_pub" =>$this->faker->dateTime(),
            "video" =>$this->faker->url(),
            "section_id"=>function() {
                return Section::factory()->create()->id;
            },
        ];
    }
}
