<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('frontend.kontak.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'email'=>'required|email|max:255',
            'subjek'=>'required|string|max:255',
            'pesan'=>'required|string',
        ]);       
        Kontak::create($request->only('nama', 'email', 'subjek', 'pesan'));
        return back()->with('success', 'Message sent successfully!');
    }
}
