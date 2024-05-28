<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'), // Replace with a secure password
                'role' => 'super_admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'), // Replace with a secure password
                'role' => 'staff',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
