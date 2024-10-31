<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuan.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'email' => 'required|email',
            'nama' => 'required|string|max:255',
            'ajuan' => 'required|string|max:1000',
        ]);

        // Database
        // ...

        return redirect()->route('pengajuan.create')->with('success', 'Pengajuan berhasil dikirim!');
    }
}
