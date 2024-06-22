<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::query()->forceDelete();

        Category::create([
            'name' => 'Cuci & Setrika',
            'code' => 'CCSK',
            'image_path' => '/images/cuci.png',
            'status' => 'Active'
        ]);

        Category::create([
            'name' => 'Cuci',
            'code' => 'CC',
            'image_path' => '/images/cuci.png',
            'status' => 'Active'
        ]);

        Category::create([
            'name' => 'Setrika',
            'code' => 'SK',
            'image_path' => '/images/setrika.png',
            'status' => 'Active'
        ]);
    }
}
