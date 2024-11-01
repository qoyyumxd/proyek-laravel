<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
class BarangSeeder extends Seeder
{
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Barang 1',
            'harga' => 10000,
            'jumlah' => 50,
        ]);

        Barang::create([
            'nama_barang' => 'Barang 2',
            'harga' => 20000,
            'jumlah' => 30,
        ]);
    }
}