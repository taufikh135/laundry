<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::query()->forceDelete();

        Service::create([
            'name' => 'Express',
            'price' => 20000,
            'point' => 20,
            'product_code' => 'P001',
            'description' => 'Express Service',
        ]);

        Service::create([
            'name' => 'Reguler',
            'price' => 10000,
            'point' => 10,
            'product_code' => 'P001',
            'description' => 'Reguler Service',
        ]);

        Service::create([
            'name' => 'Reguler',
            'price' => 20000,
            'point' => 10,
            'product_code' => 'P002',
            'description' => 'Reguler Service',
        ]);

        Service::create([
            'name' => 'Reguler',
            'price' => 15000,
            'point' => 10,
            'product_code' => 'P003',
            'description' => 'Reguler Service',
        ]);
    }
}
