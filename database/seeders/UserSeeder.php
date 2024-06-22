<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->forceDelete();

        $this->create();
    }

    private function create(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'number_phone' => '6281317826173',
            'password' => Hash::make('password'),
            'address' => 'Jl. Cempaka Putih No. 1'
        ]);
        $user->id = 1;
        $user->point = 100;
        $user->update();
    }
}
