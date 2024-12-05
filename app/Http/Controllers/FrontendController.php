<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\FAQ;
use App\Models\Ulasan;
use App\Models\AboutUs;
use App\Models\Anggota;
use App\Models\Layanan;
use App\Models\Customer;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        // if (!$portofolios) {
        //     return redirect()->back()->with('error', 'Data tidak ditemukan.');
        // }

        // if ($portofolios->isEmpty()) {
        //     return view('portofolios.index', ['portofolios' => []])
        //         ->with('error', 'Tidak ada data portofolio.');
        // }


        return view('frontend.home', compact('portofolios'));
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
        $faqs = FAQ::all();

        return view('frontend.contact-us', compact('faqs'));
    }


    // public function showAchievements()
    // {
    //     $totalClients = Customer::count();
    //     $positiveReviewsPercentage = Ulasan::where('rating', '>=', 4)->count() / Ulasan::count() * 100;
    //     $newClientsThisMonth = Customer::whereMonth('created_at', Carbon::now()->month)
    //         ->whereYear('created_at', Carbon::now()->year)
    //         ->count();

    //     return view('frontend.achievements', compact('totalClients', 'positiveReviewsPercentage', 'newClientsThisMonth'));
    // }
}
