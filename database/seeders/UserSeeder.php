<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'student1',
                'password' => Hash::make('password123'),
                'UserType' => 'Student',
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
            ],
            [
                'username' => 'student2',
                'password' => Hash::make('password123'),
                'UserType' => 'Student',
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
            ],
            [
                'username' => 'aimofficer1',
                'password' => Hash::make('password123'),
                'UserType' => 'AIM Officer',
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
            ],
            [
                'username' => 'instructor1',
                'password' => Hash::make('password123'),
                'UserType' => 'Instructor',
                'name' => 'Bob Brown',
                'email' => 'bob.brown@example.com',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
