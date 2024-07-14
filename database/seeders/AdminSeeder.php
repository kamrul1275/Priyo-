<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

        [    'user_name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'male',
            'role' => 'user',
        ],
            [ 
            'user_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'gender'=>'female',
            'role' => 'admin',
            ]

        ]);
    }
}
