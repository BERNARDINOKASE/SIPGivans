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
                'name' => 'admin',
                'nis' => 1231231123,
                'address' => 'kupang',
                'email' => 'sip@admin.com',
                'role' => 'administrator',
                'password' => bcrypt('sipgivans')
            ], [
                'name' => 'guru BK',
                'nis' => 1098531123,
                'address' => 'kupang',
                'email' => 'sip@gurubk.com',
                'role' => 'guidanceTeacher',
                'password' => bcrypt('sipgivans')
            ], [
                'name' => 'siswa',
                'nis' => 1223891123,
                'address' => 'kupang',
                'email' => 'sip@siswa.com',
                'role' => 'student',
                'password' => bcrypt('sipgivans')
            ]
        ];

        foreach ($data as $value) {
            User::create($value);
        }
    }
}
