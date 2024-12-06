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
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FrontendController extends Controller
{
    public function index()
    {
        $portofolios = Portofolio::all();
        $testimonials = Testimonial::latest()->take(6)->get();

        return view('frontend.home', compact('portofolios', 'testimonials'));
    }

    public function layanan()
    {
        $layanans = Layanan::all();

        return view('frontend.layanan', compact('layanans'));
    }

    public function portofolio()
    {
        $portofolios = Portofolio::all();
        $averageRating = number_format(Testimonial::avg('rating'), 1);

        return view('frontend.portofolio', compact('portofolios', 'averageRating'));
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

    public function submitUlasan(Request $request)
    {
        $validated = $request->validate([
            'nama_klien' => 'required|string|max:255',
            'ulasan' => 'required|string|max:300',
            'rating' => 'required|integer|between:1,5',
        ]);

        // dd($validated);
        Log::info('Data yang diterima: ', $validated);

        Testimonial::create([
            'nama_klien' => $validated['nama_klien'],
            'ulasan' => $validated['ulasan'],
            'rating' => $validated['rating'],
        ]);

        return redirect()->back()->with('success', 'Ulasan Anda berhasil dikirim!');
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
