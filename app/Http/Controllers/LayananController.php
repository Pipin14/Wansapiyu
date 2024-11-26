<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();

        return view('layanan.index', compact('layanans'));
    }

    public function show($id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return redirect()->route('layanan.index')->with('error', 'Layanan tidak ditemukan');
        }

        return view('layanan.detail_layanan', compact('layanan'));
    }
}
