<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use  App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        $Galeri = Galeri::inRandomOrder()->limit(3)->get();

        return view('portofolio.index', compact('portofolios', 'Galeri'));
    }

    public function showByKategori($kategori)
    {
        $portofolio = Portofolio::with('galeris')->where('judul', $kategori)->first();

        if (!$portofolio) {
            abort(404, 'Portofolio not found');
        }

        $galeris = $portofolio->galeris;

        if ($galeris->isEmpty()) {
            return redirect()->back()->with('error', 'Galeri tidak ditemukan.');
        }

        if ($galeris->count() < 3) {
            $galeris = $galeris;
        } else {
            $galeris = $galeris->random(3);
        }
        return view('portofolio.galeri_portofolio', compact('portofolio', 'galeris'));
    }
}
