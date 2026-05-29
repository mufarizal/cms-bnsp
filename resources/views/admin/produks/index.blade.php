@extends('admin.layouts.app')

@section('page-title', 'Manajemen Produk')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Daftar Produk & Jasa</h3>
        <a href="{{ route('admin.produks.create') }}"
            class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded transition text-sm whitespace-nowrap">
            + Tambah Produk
        </a>
    </div>

    {{-- MOBILE: Card List --}}
    <div class="flex flex-col gap-3 md:hidden">
        @forelse($produks as $i => $produk)
            <div class="bg-white rounded-lg shadow p-4 flex gap-3">
                <div class="flex-shrink-0">
                    @if ($produk->gambar)
                        <img src="{{ Storage::url($produk->gambar) }}" class="w-16 h-16 object-cover rounded">
                    @else
                        <div class="w-16 h-16 bg-pink-100 rounded flex items-center justify-center text-pink-300 text-2xl">
                            📦
                        </div>
                    @endif
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-medium text-gray-800 text-sm truncate">{{ $produk->nama }}</p>
                    <p class="text-xs text-gray-400 mt-0.5 line-clamp-2">{{ $produk->deskripsi }}</p>
                    <p class="text-xs text-pink-600 font-medium mt-1">{{ $produk->harga ?? 'Hubungi Kami' }}</p>
                    <div class="flex gap-2 mt-3">
                        <a href="{{ route('admin.produks.edit', $produk) }}"
                            class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1.5 rounded transition flex-1 text-center">
                            Edit
                        </a>
                        <form action="{{ route('admin.produks.destroy', $produk) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus produk ini?')" class="flex-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="w-full bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1.5 rounded transition">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow px-6 py-10 text-center text-gray-400">
                Belum ada produk.
            </div>
        @endforelse
    </div>

    {{-- DESKTOP: Table --}}
    <div class="bg-white rounded-lg shadow overflow-hidden hidden md:block">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="text-left px-6 py-3 text-gray-600">#</th>
                    <th class="text-left px-6 py-3 text-gray-600">Gambar</th>
                    <th class="text-left px-6 py-3 text-gray-600">Nama Produk</th>
                    <th class="text-left px-6 py-3 text-gray-600">Harga</th>
                    <th class="text-left px-6 py-3 text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($produks as $i => $produk)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-500">{{ $i + 1 }}</td>
                        <td class="px-6 py-4">
                            @if ($produk->gambar)
                                <img src="{{ Storage::url($produk->gambar) }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <div
                                    class="w-16 h-16 bg-pink-100 rounded flex items-center justify-center text-pink-300 text-xl">
                                    📦
                                </div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-800">
                            {{ $produk->nama }}
                            <p class="text-xs text-gray-400 font-normal mt-0.5 line-clamp-1">{{ $produk->deskripsi }}</p>
                        </td>
                        <td class="px-6 py-4 text-gray-600">
                            {{ $produk->harga ?? 'Hubungi Kami' }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.produks.edit', $produk) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1 rounded transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.produks.destroy', $produk) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1 rounded transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-10 text-center text-gray-400">
                            Belum ada produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4 px-1">
        {{ $produks->links() }}
    </div>

@endsection
