<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderLigne;
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

        $this->call([
            RoleSeeder::class,
        ]);

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
        User::factory()->create([
            'name' => 'hadrien janssens',
            'email' => 'hadrien.janssens7@gmail.com',
            'password' => 'password',
            'role_id' => 1,
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);

        Order::create([
            'user_id' => 1
        ]);
        OrderLigne::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'size' => 'normal',
        ]);
        OrderLigne::create([
            'order_id' => 1,
            'product_id' => 2,
            'quantity' => 1,
            'size' => 'normal',
        ]);
        OrderLigne::create([
            'order_id' => 1,
            'product_id' => 2,
            'quantity' => 2,
            'size' => 'big',
        ]);


        Order::create([
            'user_id' => 1,
            'is_sent' => true
        ]);
        OrderLigne::create([
            'order_id' => 2,
            'product_id' => 3,
            'quantity' => 5,
            'size' => 'normal',
        ]);

        Order::create([
            'user_id' => 1,
            'is_sent' => true,
            'is_paid' => true
        ]);
    }
}
