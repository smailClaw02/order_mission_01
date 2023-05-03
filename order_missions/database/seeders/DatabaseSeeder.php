<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Fonctionnaire;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        require_once __DIR__ .'/fonctionnaires.php';

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Fonctionnaire::factory()->createMany($fonctionnaires);
    }
}
