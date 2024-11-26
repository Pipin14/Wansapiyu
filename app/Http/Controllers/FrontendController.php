<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
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
        return view('frontend.portofolio');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function contactUs()
    {
        return view('frontend.contact-us');
    }
}

