<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $upcoming = Event::where('tanggal', '>=', today())
            ->orderBy('tanggal', 'asc')
            ->get();

        $past = Event::where('tanggal', '<', today())
            ->orderBy('tanggal', 'desc')
            ->get();
        return view('frontend.events.index', compact('upcoming','past'));
    }
}
