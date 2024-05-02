<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'id' => 1,
            'nama_kategori' => 'Streaming'
        ]);

        Kategori::create([
            'id' => 2,
            'nama_kategori' => 'Gaming'
        ]);
    }
}
