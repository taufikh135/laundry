<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->forceDelete();

        Product::create([
            'code' => 'P001',
            'type_code' => 'CCKL',
            'name' => 'Kiloan',
            'image_path' => '/kiloan.jpg',
            'status' => 'Active',
        ]);

        Product::create([
            'code' => 'P002',
            'type_code' => 'CCST',
            'name' => 'Selimut',
            'image_path' => '/selimut.jpg',
            'status' => 'Active',
        ]);

        Product::create([
            'code' => 'P003',
            'type_code' => 'CCST',
            'name' => 'Kaos',
            'image_path' => '/selimut.jpg',
            'status' => 'Active',
        ]);
    }
}
