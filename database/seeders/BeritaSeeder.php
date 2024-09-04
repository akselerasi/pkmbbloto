<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            'judul' => 'Fitur Baru Laravel 11',
            'slug' => 'fitur-baru-laravel-11',
            'gambar' => 'laravel.jpg',
            'artikel' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, quisquam.',
            'kategori_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('beritas')->insert([
            'judul' => 'Cara mendeteksi penyakit kanker',
            'slug' => 'cara-mendeteksi-penyakit-kanker',
            'gambar' => 'kanker.jpg',
            'artikel' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, quisquam.',
            'kategori_id' => 3,
            'user_id' => 1,
        ]);

        DB::table('beritas')->insert([
            'judul' => 'Diagnosa penyakit influensa',
            'slug' => 'diagnosa-penyakit-influensa',
            'gambar' => 'influensa.jpg',
            'artikel' => 'lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, quisquam.',
            'kategori_id' => 3,
            'user_id' => 2,
        ]);

    }

}
