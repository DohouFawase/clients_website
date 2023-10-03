<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CommandeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CategorieTableSeeder::class);
        $this->call(CmdDetailTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(PostTableSeeder::class);

        
    }
}
