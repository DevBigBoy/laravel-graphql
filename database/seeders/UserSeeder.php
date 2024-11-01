<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'admin',
            'status' => 'active',
        ]);

        // Create manager user
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'role' => 'manager',
            'status' => 'active',
        ]);

        // Create regular users using the new Laravel 11 factory syntax
        User::factory(10) // Creates 10 instances of User model
        ->sequence(fn ($sequence) => [  // Applies a sequence of modifications to each instance
            'role' => 'user',  // Sets role as 'user' for all instances
            'status' => $sequence->index % 2 === 0 ? 'active' : 'inactive',  // Alternates between 'active' and 'inactive'
        ])->create();  // Saves all instances to the database
    }
}

