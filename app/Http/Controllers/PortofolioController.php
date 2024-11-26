<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Portofolio;
use Illuminate\Support\Facades\Log;

class PortofolioController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        Log::info($portofolios);

        return view('portofolio.index', compact('portofolios'));
    }
}
