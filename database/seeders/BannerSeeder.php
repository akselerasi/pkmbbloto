<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            'judul' => 'laravel',
            'gambar' => 'laravel.jpg',
        ]);
        DB::table('banners')->insert([
            'judul' => 'corel draw',
            'gambar' => 'coreldraw.jpg',
        ]);
        DB::table('banners')->insert([
            'judul' => 'adobe photoshop',
            'gambar' => 'photoshop.jpg',
        ]);
    }
}
