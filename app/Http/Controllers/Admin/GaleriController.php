<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(12);
        return view('admin.galeris.index', compact('galeris'));
    }

    public function create()
    {
        return view('admin.galeris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:3072',
            'keterangan' => 'nullable|string|max:500',
        ]);

        $data = $request->only(['judul', 'keterangan']);
        $data['gambar'] = $request->file('gambar')->store('galeris', 'public');

        Galeri::create($data);

        return redirect()->route('admin.galeris.index')
            ->with('success', 'Foto berhasil ditambahkan!');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeris.edit', compact('galeri'));
    }
        
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
            'keterangan' => 'nullable|string|max:500',
        ]);

        $data = $request->only(['judul', 'keterangan']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('galeris', 'public');
        }

        $galeri->update($data);

        return redirect()->route('admin.galeris.index')
            ->with('success', 'Foto berhasil diupdate!');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('admin.galeris.index')
            ->with('success', 'Foto berhasil dihapus!');
    }
}