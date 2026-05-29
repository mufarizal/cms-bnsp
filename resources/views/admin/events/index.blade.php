@extends('admin.layouts.app')

@section('page-title', 'Manajemen Event')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Daftar Event</h3>
        <a href="{{ route('admin.events.create') }}"
            class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded transition text-sm whitespace-nowrap">
            + Tambah Event
        </a>
    </div>

    {{-- MOBILE: Card List --}}
    <div class="flex flex-col gap-3 md:hidden">
        @forelse($events as $i => $event)
            <div class="bg-white rounded-lg shadow p-4">
                <div class="flex justify-between items-start gap-2 mb-1">
                    <p class="font-medium text-gray-800 text-sm">{{ $event->nama }}</p>
                    @if ($event->isUpcoming())
                        <span
                            class="bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded-full whitespace-nowrap flex-shrink-0">
                            Upcoming
                        </span>
                    @else
                        <span
                            class="bg-gray-100 text-gray-500 text-xs px-2 py-0.5 rounded-full whitespace-nowrap flex-shrink-0">
                            Selesai
                        </span>
                    @endif
                </div>
                <p class="text-xs text-gray-400 line-clamp-1 mb-2">{{ $event->deskripsi }}</p>
                <div class="flex flex-col gap-0.5 mb-3">
                    <p class="text-xs text-gray-500">📅 {{ $event->tanggal->format('d M Y') }}</p>
                    <p class="text-xs text-gray-500">📍 {{ $event->lokasi }}</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('admin.events.edit', $event) }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1.5 rounded transition flex-1 text-center">
                        Edit
                    </a>
                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus event ini?')" class="flex-1">
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
                Belum ada event.
            </div>
        @endforelse
    </div>

    {{-- DESKTOP: Table --}}
    <div class="bg-white rounded-lg shadow overflow-hidden hidden md:block">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="text-left px-6 py-3 text-gray-600">#</th>
                    <th class="text-left px-6 py-3 text-gray-600">Nama Event</th>
                    <th class="text-left px-6 py-3 text-gray-600">Tanggal</th>
                    <th class="text-left px-6 py-3 text-gray-600">Lokasi</th>
                    <th class="text-left px-6 py-3 text-gray-600">Status</th>
                    <th class="text-left px-6 py-3 text-gray-600">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($events as $i => $event)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-gray-500">{{ $i + 1 }}</td>
                        <td class="px-6 py-4">
                            <p class="font-medium text-gray-800">{{ $event->nama }}</p>
                            <p class="text-xs text-gray-400 mt-0.5 line-clamp-1">{{ $event->deskripsi }}</p>
                        </td>
                        <td class="px-6 py-4 text-gray-600 whitespace-nowrap">
                            {{ $event->tanggal->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 text-gray-600">{{ $event->lokasi }}</td>
                        <td class="px-6 py-4">
                            @if ($event->isUpcoming())
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">
                                    Upcoming
                                </span>
                            @else
                                <span class="bg-gray-100 text-gray-500 text-xs px-2 py-1 rounded-full">
                                    Selesai
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.events.edit', $event) }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs px-3 py-1 rounded transition">
                                    Edit
                                </a>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus event ini?')">
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
                        <td colspan="6" class="px-6 py-10 text-center text-gray-400">
                            Belum ada event.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="px-6 py-4">
            {{ $events->links() }}
        </div>
    </div>

    <div class="mt-4 px-1 md:hidden">
        {{ $events->links() }}
    </div>

@endsection
