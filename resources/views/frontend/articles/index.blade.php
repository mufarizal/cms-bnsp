@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Artikel</h2>
        <p class="text-gray-500 text-sm mt-1">Kumpulan artikel seputar bahasa Jepang & dunia translator</p>
    </div>

    {{-- Filter Kategori --}}
    <div class="flex flex-wrap gap-2 mb-8">
        <a href="{{ route('artikel.index') }}"
            class="px-4 py-1 rounded-full text-sm border {{ !isset($kategori) ? 'bg-pink-500 text-white border-pink-500' : 'border-gray-300 text-gray-600 hover:border-pink-400' }} transition">
            Semua
        </a>
        @foreach ($kategoris as $kat)
            <a href="{{ route('artikel.kategori', $kat->kategori) }}"
                class="px-4 py-1 rounded-full text-sm border {{ isset($kategori) && $kategori === $kat->kategori ? 'bg-pink-500 text-white border-pink-500' : 'border-gray-300 text-gray-600 hover:border-pink-400' }} transition">
                {{ $kat->kategori }}
            </a>
        @endforeach
    </div>

    {{-- Grid Artikel --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($artikels as $artikel)
            <a href="{{ route('artikel.show', $artikel->slug) }}"
                class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden group">
                @if ($artikel->thumbnail)
                    <img src="{{ Storage::url($artikel->thumbnail) }}"
                        class="w-full h-48 object-cover group-hover:opacity-90 transition">
                @else
                    <div class="w-full h-48 bg-pink-100 flex items-center justify-center">
                        <span class="text-pink-300 text-4xl">文</span>
                    </div>
                @endif
                <div class="p-4">
                    <span class="text-xs bg-pink-100 text-pink-600 px-2 py-0.5 rounded-full">{{ $artikel->kategori }}</span>
                    <h3 class="font-semibold text-gray-800 mt-2 group-hover:text-pink-500 transition">{{ $artikel->judul }}
                    </h3>
                    <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ $artikel->ringkasan }}</p>
                    <p class="text-xs text-gray-400 mt-3">{{ $artikel->created_at->format('d M Y') }}</p>
                </div>
            </a>
        @empty
            <div class="col-span-3 text-center py-16 text-gray-400">Belum ada artikel.</div>
        @endforelse
    </div>

    <div class="mt-8">
        {{ $artikels->links() }}
    </div>
@endsection
