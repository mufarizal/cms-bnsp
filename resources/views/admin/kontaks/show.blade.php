@extends('admin.layouts.app')

@section('page-title', 'Detail Pesan')

@section('content')
    <div class="max-w-2xl">
        <a href="{{ route('admin.kontaks.index') }}" class="text-pink-500 text-sm hover:underline mb-4 inline-block">
            ← Kembali
        </a>

        <div class="bg-white rounded-lg shadow p-4 md:p-6 space-y-4">
            <div class="flex justify-between items-start gap-3">
                <h3 class="font-semibold text-gray-800 text-base md:text-lg leading-snug">{{ $kontak->subjek }}</h3>
                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full whitespace-nowrap flex-shrink-0">
                    Sudah Dibaca
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm border-t pt-4">
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Dari</p>
                    <p class="font-medium text-gray-800">{{ $kontak->nama }}</p>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Email</p>
                    <a href="mailto:{{ $kontak->email }}" class="font-medium text-pink-500 hover:underline break-all">
                        {{ $kontak->email }}
                    </a>
                </div>
                <div>
                    <p class="text-gray-400 text-xs mb-0.5">Tanggal</p>
                    <p class="font-medium text-gray-800">
                        {{ $kontak->created_at->format('d M Y, H:i') }} WIB
                    </p>
                </div>
            </div>

            <div class="border-t pt-4">
                <p class="text-gray-400 text-xs mb-2">Pesan</p>
                <div class="bg-gray-50 rounded p-4 text-sm text-gray-700 leading-relaxed whitespace-pre-wrap">
                    {{ $kontak->pesan }}
                </div>
            </div>

            <div class="border-t pt-4 flex flex-col sm:flex-row gap-2">
                <a href="mailto:{{ $kontak->email }}"
                    class="bg-pink-500 hover:bg-pink-600 text-white text-sm px-4 py-2 rounded transition text-center">
                    Balas via Email
                </a>
                <form action="{{ route('admin.kontaks.destroy', $kontak) }}" method="POST"
                    onsubmit="return confirm('Yakin hapus pesan ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full sm:w-auto bg-red-500 hover:bg-red-600 text-white text-sm px-4 py-2 rounded transition">
                        Hapus Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
