<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // simpan ke tabel users
        DB::table('users')->insert([
            'name' => 'Dita',
            'email' => 'dita@gmail.com',
            'password' => Hash::make('rahasia123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Deni',
            'email' => 'deni@gmail.com',
            'password' => Hash::make('rahasia123'),
        ]);
    }
}
