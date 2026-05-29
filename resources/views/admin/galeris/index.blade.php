@extends('admin.layouts.app')

@section('page-title', 'Manajemen Galeri')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Galeri Foto</h3>
        <a href="{{ route('admin.galeris.create') }}"
            class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded transition text-sm">
            + Tambah Foto
        </a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @forelse($galeris as $galeri)
            <div class="bg-white rounded-lg shadow overflow-hidden group relative">
                <img src="{{ Storage::url($galeri->gambar) }}" class="w-full h-40 object-cover">
                <div class="p-3">
                    <p class="text-sm font-medium text-gray-700 truncate">{{ $galeri->judul }}</p>
                    @if ($galeri->keterangan)
                        <p class="text-xs text-gray-400 truncate mt-0.5">{{ $galeri->keterangan }}</p>
                    @endif
                    <div class="flex gap-2 mt-3">
                        <a href="{{ route('admin.galeris.edit', $galeri) }}"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1 rounded transition flex-1 text-center">
                            Edit
                        </a>
                        <form action="{{ route('admin.galeris.destroy', $galeri) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus foto ini?')" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded transition">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-4 text-center py-16 text-gray-400">
                Belum ada foto di galeri.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $galeris->links() }}
    </div>

@endsection
