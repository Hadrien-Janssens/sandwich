<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'role_id' => 1,
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => 'password',
            'role_id' => 3,
        ]);
        User::factory()->create([
            'name' => 'order User',
            'email' => 'order@example.com',
            'password' => 'password',
            'role_id' => 2,
        ]);
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'role_id' => 1,
        ]);

        $this->call([
            RoleSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
        ]);
    }
}