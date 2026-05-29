@extends('admin.layouts.app')

@section('page-title', 'Edit Klien')

@section('content')
    <div class="bg-white rounded-lg shadow p-6 max-w-xl">

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.kliens.update', $klien) }}" method="POST"
              enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Klien / Perusahaan</label>
                <input type="text" name="nama" value="{{ old('nama', $klien->nama) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Website (opsional)</label>
                <input type="url" name="website" value="{{ old('website', $klien->website) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ganti Logo</label>
                @if($klien->logo)
                    <img src="{{ Storage::url($klien->logo) }}"
                         class="w-32 h-32 object-contain rounded mb-2 mx-auto">
                    <p class="text-xs text-gray-400 mb-2 text-center">Kosongkan jika tidak ingin ganti logo.</p>
                @endif
                <input type="file" name="logo" accept="image/*" id="previewInput"
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded
                           file:border-0 file:bg-pink-500 file:text-white hover:file:bg-pink-600">
                <img id="preview" src="#" class="mt-3 w-32 h-32 object-contain rounded hidden mx-auto">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded transition text-sm">
                    Update Klien
                </button>
                <a href="{{ route('admin.kliens.index') }}"
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