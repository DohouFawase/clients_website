<?php

namespace Database\Seeders;

use App\Models\admin\commerce\payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        payment::factory()->count(50)->create();
    }
}
