<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'ringkasan' => 'required|string|max:500',
            'isi' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'file_attachment' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $data = $request->only(['judul', 'kategori', 'ringkasan', 'isi']);
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('artikel/thumbnails', 'public');
        }

        if ($request->hasFile('file_attachment')) {
            $data['file_attachment'] = $request->file('file_attachment')->store('artikel/files', 'public');
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'ringkasan' => 'required|string|max:500',
            'isi' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'file_attachment' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $data = $request->only(['judul', 'kategori', 'ringkasan', 'isi']);
        $data['slug'] = Str::slug($request->judul);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('artikel/thumbnails', 'public');
        }

        if ($request->hasFile('file_attachment')) {
            $data['file_attachment'] = $request->file('file_attachment')->store('artikel/files', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
