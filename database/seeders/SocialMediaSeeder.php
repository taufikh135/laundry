<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialMedia::query()->forceDelete();

        SocialMedia::create([
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/',
        ]);

        SocialMedia::create([
            'name' => 'Instagram',
            'url' => 'https://www.instagram.com/',
        ]);
    }
}
