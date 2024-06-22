<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::query()->forceDelete();

        Info::create([
            'title' => 'Laundry',
            'content' => 'Laundry',
            'image_path' => '/images/banner.png',
            'redirect_url' => '/laundry',
        ]);
        Info::create([
            'title' => 'Laundry',
            'content' => 'Laundry',
            'image_path' => '/images/banner.png',
            'redirect_url' => '/laundry',
        ]);
        Info::create([
            'title' => 'Laundry',
            'content' => 'Laundry',
            'image_path' => '/images/banner.png',
            'redirect_url' => '/laundry',
        ]);
    }
}
