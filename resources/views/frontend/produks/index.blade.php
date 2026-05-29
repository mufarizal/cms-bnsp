@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Produk & Jasa Kami</h2>
        <p class="text-gray-500 text-sm mt-1">Layanan terbaik untuk kebutuhan bahasa Jepang Anda</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($produks as $produk)
            <div class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
                @if ($produk->gambar)
                    <img src="{{ Storage::url($produk->gambar) }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-pink-50 flex items-center justify-center text-5xl">
                        📦
                    </div>
                @endif
                <div class="p-5">
                    <h3 class="font-semibold text-gray-800 text-lg">{{ $produk->nama }}</h3>
                    <p class="text-gray-500 text-sm mt-2 leading-relaxed">{{ $produk->deskripsi }}</p>
                    <div class="mt-4 pt-4 border-t flex items-center justify-between">
                        <span class="text-pink-500 font-semibold text-sm">
                            {{ $produk->harga ?? 'Hubungi Kami' }}
                        </span>
                        <a href="{{ url('/kontak') }}"
                            class="bg-pink-500 hover:bg-pink-600 text-white text-xs px-4 py-2 rounded transition">
                            Tanya Sekarang
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-16 text-gray-400">
                Belum ada produk tersedia.
            </div>
        @endforelse
    </div>
@endsection
