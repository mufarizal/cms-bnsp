<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Produk;
use App\Models\Klien;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $latestArticles = Article::latest()->take(3)->get();
        $featuredProduks = Produk::latest()->take(3)->get();
        $upcomingEvents = Event::where('tanggal', '>=', Carbon::today())
            ->orderBy('tanggal', 'asc')
            ->take(2)
            ->get();
        $kliens = Klien::all();

        $stats = [
            'articles' => Article::count(),
            'produks' => Produk::count(),
            'events' => Event::count(),
            'kliens' => Klien::count(),
        ];

        return view('frontend.home', compact('latestArticles', 'featuredProduks', 'upcomingEvents', 'kliens', 'stats'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}
