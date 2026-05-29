<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Models\Klien;

class KlienController extends Controller
{
    public function index()
    {
        $kliens = Klien::latest()->get();
        return view('frontend.kliens.index', compact('kliens'));
    }
}