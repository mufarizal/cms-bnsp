@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto">
        <a href="{{ route('artikel.index') }}" class="text-pink-500 text-sm hover:underline">← Kembali ke Artikel</a>

        <div class="bg-white rounded-lg shadow p-8 mt-4">
            <span class="text-xs bg-pink-100 text-pink-600 px-2 py-0.5 rounded-full">{{ $article->kategori }}</span>
            <h1 class="text-2xl font-bold text-gray-800 mt-3">{{ $article->judul }}</h1>
            <p class="text-gray-400 text-sm mt-1">{{ $article->created_at->format('d M Y') }}</p>

            @if ($article->thumbnail)
                <img src="{{ Storage::url($article->thumbnail) }}" class="w-full h-64 object-cover rounded-lg mt-5">
            @endif

            <div class="prose prose-sm max-w-none mt-6 text-gray-700 leading-relaxed">
                {!! nl2br(e($article->isi)) !!}
            </div>

            @if ($article->file_attachment)
                <div class="mt-8 border-t pt-5">
                    <p class="text-sm font-medium text-gray-700 mb-2">File Lampiran:</p>
                    <a href="{{ Storage::url($article->file_attachment) }}" target="_blank"
                        class="inline-flex items-center gap-2 bg-gray-800 text-white text-sm px-4 py-2 rounded hover:bg-gray-700 transition">
                        Download File
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
