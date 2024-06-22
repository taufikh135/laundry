<?php

namespace Database\Seeders;

use App\Models\Web;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Web::query()->forceDelete();

        $web = new Web();
        $web->brand_name = 'Laundry';
        $web->syarat_ketentuan = '<h1>Syarat & Ketentuan</h1>';
        $web->save();
    }
}
