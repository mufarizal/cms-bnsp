<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Produk;
use App\Models\Galeri;
use App\Models\Event;
use App\Models\Klien;
use App\Models\Kontak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $totalProduks = Produk::count();
        $totalGaleris = Galeri::count();
        $totalEvents = Event::count();
        $totalKliens = Klien::count();
        $totalKontaks = Kontak::count();
        $unreadKontaks = Kontak::where('status', 'belum_dibaca')->count();

        $latestKontaks = Kontak::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalArticles',
            'totalProduks',
            'totalGaleris',
            'totalEvents',
            'totalKliens',
            'totalKontaks',
            'unreadKontaks',
            'latestKontaks'
        ));
    }
}
