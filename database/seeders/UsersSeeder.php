<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createUsers = [
            [
                'uuid' => Str::uuid(),
                'name' => 'admin 1',
                'email' => 'admin1@email.com',
                'password' => Hash::make('Password@1'),
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'user 1',
                'email' => 'user1@email.com',
                'password' => Hash::make('Password@1'),
            ],
        ];

        $roles = [
            'admin',
            'user',
        ];

        foreach ($createUsers as $index => $user) {
            $user = User::create($user);
            $user->assignRole($roles[$index]);
        }
    }
}
