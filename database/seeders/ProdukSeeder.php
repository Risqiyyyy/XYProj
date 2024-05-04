<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => "Netflix Premium",
            'deskripsi' => "",
            'images' => "netflix.jpg",
            'kategori_id' => 1
        ]);
    }
}
