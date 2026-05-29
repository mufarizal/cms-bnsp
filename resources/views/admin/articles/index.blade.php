@extends('admin.layouts.app')

@section('page-title', 'Manajemen Artikel')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Daftar Artikel</h3>
        <a href="{{ route('admin.articles.create') }}"
            class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded transition text-sm whitespace-nowrap">
            + Tambah Artikel
        </a>
    </div>

    {{-- MOBILE: Card List --}}
    <div class="flex flex-col gap-3 md:hidden">
        @forelse($articles as $i => $artikel)
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex justify-between items-start gap-2 mb-2">
                    <p class="font-medium text-gray-800 text-sm leading-snug">{{ $artikel->judul }}</p>
                    <span class="bg-pink-100 text-pink-700 text-xs px-2 py-0.5 rounded-full whitespace-nowrap flex-shrink-0">
                        {{ $artikel->kategori }}
                    </span>
                </div>
                <p class="text-xs text-gray-400 mb-3">{{ $artikel->created_at->format('d M Y') }}</p>
                <div class="flex gap-2">
                    <a href="{{ route('admin.articles.edit', $artikel) }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1.5 rounded transition flex-1 text-center">
                        Edit
                    </a>
                    <form action="{{ route('admin.articles.destroy', $artikel) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus artikel ini?')" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 text-white text-xs px-3 py-1.5 rounded transition">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow px-6 py-10 text-center text-gray-400">
                Belum ada artikel.
            </div>
        @endforelse
    </div>

    {{-- DESKTOP: Table --}}
    <div class="bg-white rounded-lg shadow overflow-hidden hidden md:block">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="text-left px-6 py-3 text-gray-600">#</th>
                    <th class="text-left px-6 py-3 text-gray-600">Judul</th>
                    <th class="text-left px-6 py-3 text-gray-600">Kategori</th>
                    <th class="text-left px-6 py-3 text-gray-600">Tanggal</th>
                    <th class="text-left px-6 py-3 text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($articles as $i => $artikel)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-500">{{ $i + 1 }}</td>
                        <td class="px-6 py-4 font-medium text-gray-800">{{ $artikel->judul }}</td>
                        <td class="px-6 py-4">
                            <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded-full">
                                {{ $artikel->kategori }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-500">{{ $artikel->created_at->format('d M Y') }}</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.articles.edit', $artikel) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1 rounded transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.articles.destroy', $artikel) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus artikel ini?')">
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
                        <td colspan="5" class="px-6 py-10 text-center text-gray-400">Belum ada artikel.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4 px-1">
        {{ $articles->links() }}
    </div>

@endsection
