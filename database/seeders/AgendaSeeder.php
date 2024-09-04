<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agendas')->insert([
            'judul' => 'Workshop Laravel untuk Pemula',
            'slug' => 'programming-1',
            'artikel' => 'Teknologi',
            'user_id' => 1,
        ]);

        DB::table('agendas')->insert([
            'judul' => 'Pelatihan Desain Grafis',
            'slug' => 'design-1',
            'artikel' => 'Teknologi',
            'user_id' => 2,
        ]);
    }
}
