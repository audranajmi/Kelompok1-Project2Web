<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar.index', [
            'title' => 'Daftar',
            'active' => 'daftar'
        ]);
    }

    public function store(Request $request)
    {
        
       $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'max:255'],
            'alamat' => ['required', 'max:255'],
            'nohp' => ['required', 'numeric', 'min:15']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/masuk')->with('success', 'Daftar akun berhasil, silahkan Login.');
    }
}
