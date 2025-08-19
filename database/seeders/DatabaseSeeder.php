<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Example User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Call your custom seeders
        $this->call([
            LoanSeeder::class,
            CustomerSeeder::class,
            LeadsTableSeeder::class,
        ]);
    }
}
