<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
        	'nama' => 'Bakul Nasi Tradisional',
            'harga' => 38000,
            'kategori_id' => 1,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat nisi. In imperdiet sit amet ante et vestibulum.',
            'berat' => 0.75,
            'gambar' => 'bakul_nasi.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Blankon Solo',
            'harga' => 40000,
            'kategori_id' => 3,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat nisi. In imperdiet sit amet ante et vestibulum.',
            'berat' => 0.35,
            'gambar' => 'blangkon.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Noken Papua',
            'harga' => 250000,
            'kategori_id' => 1,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat nisi. In imperdiet sit amet ante et vestibulum.',
            'berat' => 0.75,
            'gambar' => 'noken_papua.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Pempek Palembang',
            'harga' => 55000,
            'kategori_id' => 2,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat nisi. In imperdiet sit amet ante et vestibulum.',
            'berat' => 1.0,
            'gambar' => 'pempek.png'
        ]);

        DB::table('produks')->insert([
        	'nama' => 'Keripik Singkong Balado',
            'harga' => 38000,
            'kategori_id' => 2,
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat nisi. In imperdiet sit amet ante et vestibulum.',
            'berat' => 0.5,
            'gambar' => 'sanjay.png'
        ]);
    }
}
