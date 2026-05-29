@extends('admin.layouts.app')

@section('content')
    <div class="space-y-6">

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Total Artikel -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Total Artikel</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalArticles }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-pink-50 flex items-center justify-center text-pink-500 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
            </div>

            <!-- Total Produk -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Total Produk</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalProduks }}</p>
                </div>
                <div
                    class="w-11 h-11 rounded-xl bg-yellow-50 flex items-center justify-center text-yellow-500 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
            </div>

            <!-- Total Event -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Total Event</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalEvents }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>

            <!-- Total Galeri -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Total Galeri</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalGaleris }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-green-50 flex items-center justify-center text-green-500 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>

            <!-- Total Klien -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Total Klien</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalKliens }}</p>
                </div>
                <div
                    class="w-11 h-11 rounded-xl bg-purple-50 flex items-center justify-center text-purple-500 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>

            <!-- Pesan Masuk -->
            <div
                class="bg-white rounded-xl border border-gray-200 shadow-sm p-5 flex items-center justify-between relative">
                <div>
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Pesan Masuk</p>
                    <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalKontaks }}</p>
                </div>
                <div class="w-11 h-11 rounded-xl bg-red-50 flex items-center justify-center text-red-500 flex-shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                @if ($unreadKontaks > 0)
                    <span class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">
                        {{ $unreadKontaks }} Baru
                    </span>
                @endif
            </div>

        </div>

        <!-- Latest Kontaks Table -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h2 class="text-sm font-bold text-gray-800">5 Pesan Terbaru</h2>
                <a href="{{ route('admin.kontaks.index') }}"
                    class="text-xs text-pink-600 hover:text-pink-700 font-semibold flex items-center gap-1">
                    Lihat Semua
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Email</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Subjek</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Tanggal</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Status</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($latestKontaks as $kontak)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-3.5 text-sm text-gray-900 font-medium">{{ $kontak->nama }}</td>
                                <td class="px-6 py-3.5 text-sm text-gray-500">{{ $kontak->email }}</td>
                                <td class="px-6 py-3.5 text-sm text-gray-500">{{ Str::limit($kontak->subjek, 30) }}</td>
                                <td class="px-6 py-3.5 text-sm text-gray-500">
                                    {{ $kontak->created_at->format('d M Y, H:i') }}</td>
                                <td class="px-6 py-3.5 text-sm">
                                    @if ($kontak->status == 'belum_dibaca')
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-red-100 text-red-700">
                                            Belum Dibaca
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                            Sudah Dibaca
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-3.5 text-sm">
                                    <a href="{{ route('admin.kontaks.show', $kontak->id) }}"
                                        class="inline-flex items-center gap-1 text-pink-600 hover:text-pink-700 bg-pink-50 hover:bg-pink-100 px-3 py-1.5 rounded-lg text-xs font-semibold transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        Lihat
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-8 text-center text-sm text-gray-400">Tidak ada pesan
                                    masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
