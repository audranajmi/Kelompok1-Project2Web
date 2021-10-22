<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function rendex()
    {
        return view('beranda', [
            'produks' => Produk::take(5)->get(),
            "kategoris" => Kategori::all()
        ]);
    }
}
