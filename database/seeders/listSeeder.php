<?php

namespace Database\Seeders;

use App\Models\Liste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class listSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Liste::factory()->count(10)->create();
    }
}
