<?php

namespace Database\Seeders;

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


        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'usertype' => 'admin',
            'password' => '123admin',
        ]);

        User::create([
            'name' => 'Kasir',
            'email' => 'kasir@gmail.com',
            'usertype' => 'kasir',
            'password' => '123kasir',
        ]);

        User::create([
            'name' => 'Owner',
            'email' => 'owner@gmail.com',
            'usertype' => 'owner',
            'password' => '123owner',
        ]);


    }
}
