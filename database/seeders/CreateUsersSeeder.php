<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'Admin User',
                'email'=>'admin@test.com',
                'type'=>1,
                'profile'=>null,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Manager User',
                'email'=>'manager@test.com',
                'type'=> 2,
                'profile'=>null,
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@test.com',
                'type'=>0,
                'profile'=>null,
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
