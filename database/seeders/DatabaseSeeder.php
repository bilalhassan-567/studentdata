<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Bilal User
        User::factory()->create([
            'name' => 'Bilal',
            'email' => 'bilal@gmail.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
