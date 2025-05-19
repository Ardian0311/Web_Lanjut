<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Jangan lupa untuk mengimport model User
use Illuminate\Support\Facades\Hash; // Untuk meng-hash password

class UserController extends Controller
{
    public function create()
    {
        return view('user.index'); // Menampilkan form tambah user
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan data user ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Pastikan password di-hash
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'User berhasil ditambahkan!');
    }
}





