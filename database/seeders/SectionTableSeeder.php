<?php

namespace Database\Seeders;

use App\Models\admin\blog\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Section::factory()->count(50)->create();
    }
}
