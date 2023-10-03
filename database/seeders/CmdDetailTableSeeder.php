<?php

namespace Database\Seeders;

use App\Models\admin\commerce\CmdDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmdDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CmdDetail::factory()->count(50)->create();
    }
}
