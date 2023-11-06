<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'     => "Admin",
                'phone'    => '8171181443',
                'email'    => "admin@gmail.com",
                'password' => Hash::make("admin123"),
                'role'     => "admin",
            ],
            [
                'name'     => "Manpreet-Admin",
                'phone'    => '8968514555',
                'email'    => "powar086@gmail.com",
                'password' => Hash::make("admin123"),
                'role'     => "admin",
            ],
            [
                'name'     => "Employee",
                'phone'    => '6239769725',
                'email'    => "employee@gmail.com",
                'password' => Hash::make("admin123"),
                'role'     => "employee",
            ]
        ]);
    }
}
