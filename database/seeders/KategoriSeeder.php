<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        	'nama' => 'Barang & Alat'
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Makanan & Minuman'
        ]);

        DB::table('kategoris')->insert([
        	'nama' => 'Pakaian'
        ]);
    }
}
