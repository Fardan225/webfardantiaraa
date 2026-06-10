<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesans = Pesan::latest()->get();

        return view('welcome_tiara', compact('pesans'));
    }

    public function store(Request $request)
    {
        Pesan::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim ❤️');
    }
}