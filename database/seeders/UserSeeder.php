<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('123456aA@'),
            'email' => 'nguyenphuongnam12a9@gmail.com',
            'phone_number' => '0123456789',
            'fullname' => 'Nguyen Phuong Nam',
        ]);
    }
}
