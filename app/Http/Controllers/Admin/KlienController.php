<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function index()
    {
        $kliens = Klien::latest()->paginate(12);
        return view('admin.kliens.index', compact('kliens'));
    }

    public function create()
    {
        return view('admin.kliens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website' => 'nullable|url|max:255',
        ]);

        $data = $request->only(['nama', 'website']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('kliens', 'public');
        }

        Klien::create($data);

        return redirect()->route('admin.kliens.index')
            ->with('success', 'Klien berhasil ditambahkan!');
    }

    public function edit(Klien $klien)
    {
        return view('admin.kliens.edit', compact('klien'));
    }

    public function update(Request $request, Klien $klien)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website' => 'nullable|url|max:255',
        ]);

        $data = $request->only(['nama', 'website']);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('kliens', 'public');
        }

        $klien->update($data);

        return redirect()->route('admin.kliens.index')
            ->with('success', 'Klien berhasil diupdate!');
    }

    public function destroy(Klien $klien)
    {
        $klien->delete();
        return redirect()->route('admin.kliens.index')
            ->with('success', 'Klien berhasil dihapus!');
    }
}