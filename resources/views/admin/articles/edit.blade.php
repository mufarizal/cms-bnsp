@extends('admin.layouts.app')

@section('page-title', 'Edit Artikel')

@section('content')
    <div class="bg-white rounded-lg shadow p-6 max-w-3xl">

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data"
            class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Judul Artikel</label>
                <input type="text" name="judul" value="{{ old('judul', $article->judul) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori', $article->kategori) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ringkasan</label>
                <textarea name="ringkasan" rows="3"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">{{ old('ringkasan', $article->ringkasan) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Isi Artikel</label>
                <textarea name="isi" rows="8"
                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400">{{ old('isi', $article->isi) }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Thumbnail</label>
                @if ($article->thumbnail)
                    <img src="{{ Storage::url($article->thumbnail) }}" class="w-32 h-20 object-cover rounded mb-2">
                @endif
                <input type="file" name="thumbnail" accept="image/*"
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-pink-500 file:text-white hover:file:bg-pink-600">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">File Lampiran</label>
                @if ($article->file_attachment)
                    <p class="text-xs text-gray-500 mb-1">File saat ini:
                        <a href="{{ Storage::url($article->file_attachment) }}" target="_blank"
                            class="text-pink-500 underline">
                            Lihat File
                        </a>
                    </p>
                @endif
                <input type="file" name="file_attachment" accept=".pdf,.doc,.docx"
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-gray-800 file:text-white hover:file:bg-gray-700">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded transition text-sm">
                    Update Artikel
                </button>
                <a href="{{ route('admin.articles.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded transition text-sm">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection
