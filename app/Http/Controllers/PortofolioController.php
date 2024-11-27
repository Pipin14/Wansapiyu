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
        Log::info($portofolios);

        return view('portofolio.index', compact('portofolios'));
    }

    public function showByKategori($kategori)
    {
        $portofolio = Portofolio::with('galeris')->where('judul', $kategori)->first();

        if (!$portofolio) {
            abort(404, 'Portofolio not found');
        }

        $galeris = $portofolio->galeris;

        return view('portofolio.galeri_portofolio', compact('portofolio', 'galeris'));
    }
}
