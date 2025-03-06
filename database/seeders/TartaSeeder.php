<?php

namespace Database\Seeders;
use App\Models\Tarta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TartaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tarta::factory()->count(50)->create();
    }
}
