<?php

namespace Database\Seeders;

use App\Models\Jasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jasa::query()->forceDelete();

        Jasa::create([
            'code' => 'AJMP',
            'name' => 'Antar Jemput',
            'description' => 'Antar Jemput',
        ]);

        Jasa::create([
            'code' => 'MNDR',
            'name' => 'Mandiri',
            'description' => 'Ambi sendiri antar sendiri',
        ]);
    }
}
