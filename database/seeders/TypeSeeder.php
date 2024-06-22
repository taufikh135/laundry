<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::query()->forceDelete();

        Type::create([
            'code' => 'CCST',
            'category_code' => 'CC',
            'name' => 'Satuan',
            'image_path' => '/images/layanan-khusus.png',
            'kiloan' => false,
            'status' => 'Active',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt illo officiis praesentium perspiciatis, autem totam repellendus velit fugit animi iure voluptatem. Inventore quia dolores unde delectus quis totam reiciendis?'
        ]);

        Type::create([
            'code' => 'CCKL',
            'category_code' => 'CC',
            'name' => 'Kiloan',
            'kiloan' => true,
            'image_path' => '/images/kiloan.png',
            'status' => 'Active',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt illo officiis praesentium perspiciatis, autem totam repellendus velit fugit animi iure voluptatem. Inventore quia dolores unde delectus quis totam reiciendis?'
        ]);
    }
}
