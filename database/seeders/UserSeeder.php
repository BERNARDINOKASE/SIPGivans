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
        $data = [
            [
                'name' => 'satu',
                'nis' => 1231231123,
                'address' => 'kupang',
                'email' => 'satu@example.com',
                'password' => bcrypt('sipgivans')
            ],
            [
                'name' => 'dua',
                'nis' => 1276531123,
                'address' => 'kupang',
                'email' => 'dua@example.com',
                'password' => bcrypt('sipgivans')
            ],
        ];

        foreach ($data as $value) {
            User::create($value);
        }
    }
}
