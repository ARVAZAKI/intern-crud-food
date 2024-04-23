<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama_produk' => 'chitato',
            'harga_produk' => 90000,
            'deskripsi_produk' => "blablabsalidba",
            'foto_produk' => "asdasd.jpg",
            'category' => "makanan"
        ]);
    }
}
