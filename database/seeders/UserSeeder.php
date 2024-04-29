<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'info@textile.com',
            'role' => 'super-admin',
            'password' => Hash::make('123454321'),
            'department' => 'Excecutive',
            'designation' => 'CEO',
            'joining' => '29-04-2024',
            'remember_token' => Str::random(10)
        ]);
    }
}
