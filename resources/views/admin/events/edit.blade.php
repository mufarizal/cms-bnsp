@extends('admin.layouts.app')

@section('page-title', 'Edit Event')

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

        <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data"
            class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Event</label>
                <input type="text" name="nama" value="{{ old('nama', $event->nama) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="4"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">{{ old('deskripsi', $event->deskripsi) }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ old('tanggal', $event->tanggal->format('Y-m-d')) }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Lokasi</label>
                    <input type="text" name="lokasi" value="{{ old('lokasi', $event->lokasi) }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Gambar</label>
                @if ($event->gambar)
                    <img src="{{ Storage::url($event->gambar) }}" class="w-full h-48 object-cover rounded mb-2">
                    <p class="text-xs text-gray-400 mb-2">Kosongkan jika tidak ingin ganti gambar.</p>
                @endif
                <input type="file" name="gambar" accept="image/*" id="previewInput"
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded
                           file:border-0 file:bg-pink-500 file:text-white hover:file:bg-pink-600">
                <img id="preview" src="#" class="mt-3 w-full h-48 object-cover rounded hidden">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded transition text-sm">
                    Update Event
                </button>
                <a href="{{ route('admin.events.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded transition text-sm">
                    Batal
                </a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('previewInput').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            const file = e.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
            }
        });
    </script>
@endsection
