<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'fullname' => 'Administrator',
                'level' => 'admin',
            ],
            [
                'name' => 'denny',
                'email' => 'denny@gmail.com',
                'password' => Hash::make('denny123'),
                'fullname' => 'Denny Firmansyah',
                'level' => 'tamu',
            ]
        ]);
    }
}
