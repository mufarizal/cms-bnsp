<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);
        $belumDibaca = Kontak::where('status', 'belum_dibaca')->count();
        return view('admin.kontaks.index', compact('kontaks', 'belumDibaca'));
    }

    public function show(Kontak $kontak)
    {
        if ($kontak->status === 'belum_dibaca') {
            $kontak->update(['status'=>'dibaca']);
        }

        return view('admin.kontaks.show', compact('kontak'));
    }
    

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return back()->with('success', 'Message deleted successfully!');
    }
}
