<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WebSeeder::class,
            UserSeeder::class,

            CategorySeeder::class,
            TypeSeeder::class,
            ProductSeeder::class,
            ServiceSeeder::class,

            ContactSeeder::class,
            InfoSeeder::class,
            JasaSeeder::class,
            SocialMediaSeeder::class,
        ]);
    }
}
