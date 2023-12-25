<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'role_id' => 0,
                'password' => bcrypt('12345678'),
            ],
        ];
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
