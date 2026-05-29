@extends('admin.layouts.app')

@section('page-title', 'Tambah Produk')

@section('content')
    <div class="bg-white rounded-lg shadow p-6 max-w-2xl">

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.produks.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Produk / Jasa</label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
                    placeholder="Contoh: Kursus Bahasa Jepang N5">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="4"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
                    placeholder="Deskripsi produk atau jasa...">{{ old('deskripsi') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="text" name="harga" value="{{ old('harga') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400"
                    placeholder="Contoh: Rp 500.000 / bulan  atau  Hubungi Kami">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
                <input type="file" name="gambar" accept="image/*"
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded
                           file:border-0 file:bg-pink-500 file:text-white hover:file:bg-pink-600">
                <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, WEBP. Maks 2MB.</p>
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded transition text-sm">
                    Simpan Produk
                </button>
                <a href="{{ route('admin.produks.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded transition text-sm">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
