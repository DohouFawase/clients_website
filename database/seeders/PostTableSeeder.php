<?php

namespace Database\Seeders;

use App\Models\admin\blog\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::factory()->count(50)->create();
    }
}
