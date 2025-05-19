<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,13',
            'message' => 'required|min:10',
        ]);

        // Simpan data atau kirim email dsb
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}