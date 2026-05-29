@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Event Kami</h2>
        <p class="text-gray-500 text-sm mt-1">Kegiatan dan acara PT Ayumi Nihonggo Gakkou</p>
    </div>

    {{-- Upcoming Events --}}
    @if ($upcoming->count() > 0)
        <div class="mb-10">
            <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
                <span class="w-2 h-2 bg-green-500 rounded-full inline-block"></span>
                Upcoming Event
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($upcoming as $event)
                    <div class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden flex">
                        @if ($event->gambar)
                            <img src="{{ Storage::url($event->gambar) }}" class="w-36 object-cover shrink-0">
                        @else
                            <div class="w-36 bg-pink-50 flex items-center justify-center shrink-0 text-4xl">
                                📅
                            </div>
                        @endif
                        <div class="p-5 flex flex-col justify-between">
                            <div>
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded-full">
                                    Upcoming
                                </span>
                                <h4 class="font-semibold text-gray-800 mt-2">{{ $event->nama }}</h4>
                                <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ $event->deskripsi }}</p>
                            </div>
                            <div class="mt-3 text-xs text-gray-400 space-y-1">
                                <p>📅 {{ $event->tanggal->format('d F Y') }}</p>
                                <p>📍 {{ $event->lokasi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- Past Events --}}
    @if ($past->count() > 0)
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-4 flex items-center gap-2">
                <span class="w-2 h-2 bg-gray-400 rounded-full inline-block"></span>
                Event Sebelumnya
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @foreach ($past as $event)
                    <div class="bg-white rounded-lg shadow overflow-hidden flex opacity-80">
                        @if ($event->gambar)
                            <img src="{{ Storage::url($event->gambar) }}" class="w-28 object-cover shrink-0 grayscale">
                        @else
                            <div class="w-28 bg-gray-100 flex items-center justify-center shrink-0 text-3xl">
                                📅
                            </div>
                        @endif
                        <div class="p-4">
                            <span class="bg-gray-100 text-gray-500 text-xs px-2 py-0.5 rounded-full">
                                Selesai
                            </span>
                            <h4 class="font-medium text-gray-700 mt-2 text-sm">{{ $event->nama }}</h4>
                            <div class="mt-2 text-xs text-gray-400 space-y-0.5">
                                <p>📅 {{ $event->tanggal->format('d F Y') }}</p>
                                <p>📍 {{ $event->lokasi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if ($upcoming->isEmpty() && $past->isEmpty())
        <div class="text-center py-16 text-gray-400">
            Belum ada event.
        </div>
    @endif

@endsection
