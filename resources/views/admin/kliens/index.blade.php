@extends('admin.layouts.app')

@section('page-title', 'Manajemen Klien')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h3 class="text-lg font-semibold text-gray-700">Daftar Klien</h3>
        <a href="{{ route('admin.kliens.create') }}"
            class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded transition text-sm whitespace-nowrap">
            + Tambah Klien
        </a>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 md:gap-4">
        @forelse($kliens as $klien)
            <div class="bg-white rounded-lg shadow p-3 md:p-4 flex flex-col items-center text-center">
                @if ($klien->logo)
                    <img src="{{ Storage::url($klien->logo) }}" class="w-14 h-14 md:w-20 md:h-20 object-contain mb-3">
                @else
                    <div
                        class="w-14 h-14 md:w-20 md:h-20 bg-pink-50 rounded-full flex items-center justify-center text-2xl md:text-3xl mb-3">
                        🤝
                    </div>
                @endif

                <p class="font-medium text-gray-800 text-xs md:text-sm line-clamp-2 w-full">{{ $klien->nama }}</p>

                @if ($klien->website)
                    <a href="{{ $klien->website }}" target="_blank"
                        class="text-xs text-pink-500 hover:underline mt-1 truncate w-full block">
                        {{ $klien->website }}
                    </a>
                @endif

                <div class="flex gap-1.5 md:gap-2 mt-3 w-full">
                    <a href="{{ route('admin.kliens.edit', $klien) }}"
                        class="bg-yellow-400 hover:bg-yellow-500 text-white text-xs py-1.5 rounded transition flex-1 text-center">
                        Edit
                    </a>
                    <form action="{{ route('admin.kliens.destroy', $klien) }}" method="POST"
                        onsubmit="return confirm('Yakin hapus klien ini?')" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 text-white text-xs py-1.5 rounded transition">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-2 sm:col-span-3 md:col-span-4 bg-white rounded-lg shadow py-16 text-center text-gray-400">
                Belum ada klien.
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $kliens->links() }}
    </div>

@endsection
