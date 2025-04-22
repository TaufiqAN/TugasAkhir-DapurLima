<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'role' => 'admin',
            'status' => 'active',
            'email' => 'admin@gmail.com',
            'password' => 'AdminAdie00',
        ]);

        User::create([
            'name' => 'user',
            'role' => 'user',
            'status' => 'active',
            'email' => 'user@gmail.com',
            'password' => 'user123',
        ]);
    }
}
