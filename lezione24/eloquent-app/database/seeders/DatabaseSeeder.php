<?php

namespace Database\Seeders;
use App\Models\Flight;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Flight::factory()->count(30)->create();
    }
}
