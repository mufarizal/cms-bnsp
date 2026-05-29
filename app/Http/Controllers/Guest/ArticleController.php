<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $artikels = Article::latest()->paginate(9);
        $kategoris = Article::select('kategori')->distinct()->get();
        return view('frontend.articles.index', compact('artikels', 'kategoris'));
    }

    public function show(Article $article)
    {
        return view('frontend.articles.show', compact('article'));
    }

    public function byKategori(string $kategori)
    {
        $artikels = Article::where('kategori', $kategori)->latest()->paginate(9);
        $kategoris = Article::select('kategori')->distinct()->get();
        return view('frontend.articles.index', compact('artikels', 'kategoris', 'kategori'));
    }
}
