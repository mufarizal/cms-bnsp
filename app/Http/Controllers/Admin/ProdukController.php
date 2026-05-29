<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->paginate(10);
        return view('admin.produks.index', compact('produks'));
    }

    public function create()
    {
        return view('admin.produks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'nullable|string|max:100',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi', 'harga']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('produks', 'public');
        }

        Produk::create($data);

        return redirect()->route('admin.produks.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Produk $produk)
    {
        return view('admin.produks.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'nullable|string|max:100',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->only(['nama', 'deskripsi', 'harga']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('produks', 'public');
        }

        $produk->update($data);

        return redirect()->route('admin.produks.index')
            ->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('admin.produks.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}