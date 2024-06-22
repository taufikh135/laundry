<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::query()->forceDelete();

        Contact::create([
            'id' => 'WA',
            'name' => 'WhatsApp',
            'account' => '6281317826173',
            'account_name' => 'John Doe',
            'redirect_url' => 'https://wa.me/6281317826173',
        ]);
    }
}
