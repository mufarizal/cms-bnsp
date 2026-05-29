@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Klien Kami</h2>
        <p class="text-gray-500 text-sm mt-1">Perusahaan dan institusi yang telah mempercayai kami</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @forelse($kliens as $klien)
            <div
                class="bg-white rounded-lg shadow hover:shadow-md transition p-6 flex flex-col items-center text-center group">
                @if ($klien->logo)
                    <img src="{{ Storage::url($klien->logo) }}"
                        class="w-24 h-24 object-contain mb-4 grayscale group-hover:grayscale-0 transition duration-300">
                @else
                    <div class="w-24 h-24 bg-pink-50 rounded-full flex items-center justify-center text-4xl mb-4">
                        🏢
                    </div>
                @endif

                <p class="font-semibold text-gray-800 text-sm">{{ $klien->nama }}</p>

                @if ($klien->website)
                    <a href="{{ $klien->website }}" target="_blank" class="text-xs text-pink-500 hover:underline mt-1">
                        Kunjungi Website
                    </a>
                @endif
            </div>
        @empty
            <div class="col-span-4 text-center py-16 text-gray-400">
                Belum ada data klien.
            </div>
        @endforelse
    </div>
@endsection
