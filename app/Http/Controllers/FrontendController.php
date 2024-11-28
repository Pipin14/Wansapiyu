<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Anggota;
use App\Models\Layanan;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function layanan()
    {
        $layanans = Layanan::all();

        return view('frontend.layanan', compact('layanans'));
    }

    public function portofolio()
    {
        $portofolios = Portofolio::all();

        return view('frontend.portofolio', compact('portofolios'));
    }

    public function aboutUs()
    {
        $aboutUsSections = AboutUs::all();
        $anggotas = Anggota::all();

        return view('frontend.about-us', compact('aboutUsSections', 'anggotas'));
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }
}
