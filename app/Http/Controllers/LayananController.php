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

    // public function fotografer()
    // {
    //     $fotografer = Anggota::where('jenis_layanan', 'fotografer')->get();
    //     return view('frontend.layanan.fotografer', compact('fotografer'));
    // }

    // public function mua()
    // {
    //     $mua = Anggota::where('jenis_layanan', 'mua')->get();
    //     return view('frontend.layanan.mua', compact('mua'));
    // }

    // public function jasaWeb()
    // {
    //     $jasaWeb = Anggota::where('jenis_layanan', 'jasa-web')->get();
    //     return view('frontend.layanan.jasa-web', compact('jasaWeb'));
    // }


    public function show($id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return redirect()->route('layanan.index')->with('error', 'Layanan tidak ditemukan');
        }

        return view('layanan.detail_layanan', compact('layanan'));
    }
}
