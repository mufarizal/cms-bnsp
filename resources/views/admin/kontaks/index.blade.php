@extends('admin.layouts.app')

@section('page-title', 'Pesan Masuk')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <div class="flex items-center gap-3">
            <h3 class="text-lg font-semibold text-gray-700">Pesan Masuk</h3>
            @if ($belumDibaca > 0)
                <span class="bg-pink-500 text-white text-xs px-2 py-0.5 rounded-full">
                    {{ $belumDibaca }} baru
                </span>
            @endif
        </div>
    </div>

    {{-- MOBILE: Card List --}}
    <div class="flex flex-col gap-3 md:hidden">
        @forelse($kontaks as $i => $kontak)
            <div
                class="bg-white rounded-lg shadow p-4 {{ $kontak->status === 'belum_dibaca' ? 'border-l-4 border-pink-400' : '' }}">
                <div class="flex justify-between items-start gap-2 mb-1">
                    <p
                        class="font-medium text-gray-800 text-sm {{ $kontak->status === 'belum_dibaca' ? 'font-semibold' : '' }}">
                        {{ $kontak->nama }}
                    </p>
                    @if ($kontak->status === 'belum_dibaca')
                        <span
                            class="bg-pink-100 text-pink-600 text-xs px-2 py-0.5 rounded-full whitespace-nowrap flex-shrink-0">
                            Baru
                        </span>
                    @else
                        <span
                            class="bg-gray-100 text-gray-500 text-xs px-2 py-0.5 rounded-full whitespace-nowrap flex-shrink-0">
                            Dibaca
                        </span>
                    @endif
                </div>
                <p class="text-xs text-gray-500 mb-0.5">{{ $kontak->email }}</p>
                <p class="text-xs text-gray-700 truncate mb-1">{{ $kontak->subjek }}</p>
                <p class="text-xs text-gray-400 mb-3">{{ $kontak->created_at->format('d M Y') }}</p>
                <div class="flex gap-2">
                    <a href="{{ route('admin.kontaks.show', $kontak) }}"
                        class="bg-pink-500 hover:bg-pink-600 text-white text-xs px-3 py-1.5 rounded transition flex-1 text-center">
                        Lihat
                    </a>
                    <form action="{{ route('admin.kontaks.destroy', $kontak) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus pesan ini?')" class="flex-1">
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
                Belum ada pesan masuk.
            </div>
        @endforelse
    </div>

    {{-- DESKTOP: Table --}}
    <div class="bg-white rounded-lg shadow overflow-hidden hidden md:block">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="text-left px-6 py-3 text-gray-600">#</th>
                    <th class="text-left px-6 py-3 text-gray-600">Nama</th>
                    <th class="text-left px-6 py-3 text-gray-600">Email</th>
                    <th class="text-left px-6 py-3 text-gray-600">Subjek</th>
                    <th class="text-left px-6 py-3 text-gray-600">Tanggal</th>
                    <th class="text-left px-6 py-3 text-gray-600">Status</th>
                    <th class="text-left px-6 py-3 text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($kontaks as $i => $kontak)
                    <tr
                        class="hover:bg-gray-50 {{ $kontak->status === 'belum_dibaca' ? 'font-semibold bg-pink-50' : '' }}">
                        <td class="px-6 py-4 text-gray-500">{{ $i + 1 }}</td>
                        <td class="px-6 py-4 text-gray-800">{{ $kontak->nama }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $kontak->email }}</td>
                        <td class="px-6 py-4 text-gray-700 max-w-xs truncate">{{ $kontak->subjek }}</td>
                        <td class="px-6 py-4 text-gray-500 whitespace-nowrap">{{ $kontak->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($kontak->status === 'belum_dibaca')
                                <span class="bg-pink-100 text-pink-600 text-xs px-2 py-1 rounded-full">
                                    Baru
                                </span>
                            @else
                                <span class="bg-gray-100 text-gray-500 text-xs px-2 py-1 rounded-full">
                                    Dibaca
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.kontaks.show', $kontak) }}"
                                    class="bg-pink-500 hover:bg-pink-600 text-white text-xs px-3 py-1 rounded transition">
                                    Lihat
                                </a>
                                <form action="{{ route('admin.kontaks.destroy', $kontak) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus pesan ini?')">
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
                        <td colspan="7" class="px-6 py-10 text-center text-gray-400">
                            Belum ada pesan masuk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="px-6 py-4">
            {{ $kontaks->links() }}
        </div>
    </div>

    <div class="mt-4 px-1 md:hidden">
        {{ $kontaks->links() }}
    </div>

@endsection
