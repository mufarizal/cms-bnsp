@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section
        class="min-h-[85vh] w-full bg-gradient-to-r from-pink-600 to-black flex flex-col justify-center items-center text-center px-4 py-20 -mt-10">
        <img src="{{ asset('images/logo-ayumi.png') }}" alt="PT Ayumi Nihonggo Gakkou Logo"
            class="w-32 h-32 mb-6 rounded-full">
        <h1 class="text-white text-5xl font-bold mb-4">PT Ayumi Nihonggo Gakkou</h1>
        <p class="text-white text-xl md:text-2xl mb-8 max-w-2xl">Pembelajaran Bahasa Jepang Berkualitas & Layanan Penerjemah
            Profesional</p>
        <div class="flex gap-4">
            <a href="{{ route('produk.index') }}"
                class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-3 px-8 rounded transition">Lihat Produk Kami</a>
            <a href="{{ route('kontak.index') }}"
                class="bg-transparent border-2 border-white hover:bg-white hover:text-pink-600 text-white font-bold py-3 px-8 rounded transition">Hubungi
                Kami</a>
        </div>
    </section>

    <!-- Stats Bar -->
    <section class="bg-gray-900 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div>
                    <p class="text-4xl font-bold text-pink-500 mb-2">{{ $stats['articles'] }}</p>
                    <p class="text-white font-medium">Artikel</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-pink-500 mb-2">{{ $stats['produks'] }}</p>
                    <p class="text-white font-medium">Produk & Jasa</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-pink-500 mb-2">{{ $stats['events'] }}</p>
                    <p class="text-white font-medium">Event</p>
                </div>
                <div>
                    <p class="text-4xl font-bold text-pink-500 mb-2">{{ $stats['kliens'] }}</p>
                    <p class="text-white font-medium">Klien</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Terbaru -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Artikel Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                @forelse($latestArticles as $article)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition flex flex-col">
                        @if ($article->thumbnail)
                            <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->judul }}"
                                class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-pink-100 flex items-center justify-center">
                                <span class="text-6xl text-pink-300 font-bold">文</span>
                            </div>
                        @endif
                        <div class="p-6 flex-1 flex flex-col items-start">
                            <span
                                class="inline-block px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-3">{{ $article->kategori }}</span>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $article->judul }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $article->ringkasan }}</p>
                            <div class="mt-auto">
                                <a href="{{ route('artikel.show', $article->slug) }}"
                                    class="text-pink-600 font-semibold hover:text-pink-800">Baca Selengkapnya →</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Belum ada artikel.</p>
                @endforelse
            </div>
            <div class="mt-12">
                <a href="{{ route('artikel.index') }}"
                    class="inline-block bg-pink-600 hover:bg-pink-700 text-white font-bold py-3 px-8 rounded transition">Lihat
                    Semua Artikel</a>
            </div>
        </div>
    </section>

    <!-- Layanan & Produk Kami -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Layanan & Produk Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($featuredProduks as $produk)
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-pink-500 hover:shadow-xl transition flex flex-col">
                        @if ($produk->gambar)
                            <img src="{{ Storage::url($produk->gambar) }}" alt="{{ $produk->nama }}"
                                class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200"></div>
                        @endif
                        <div class="p-6 flex-1 flex flex-col">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $produk->nama }}</h3>
                            <p class="text-gray-600 mb-4 line-clamp-3">{{ $produk->deskripsi }}</p>
                            <p class="text-pink-600 font-bold text-lg mb-4 mt-auto">
                                {{ $produk->harga ?? 'Hubungi Kami' }}
                            </p>
                            <a href="{{ route('produk.index') }}"
                                class="text-pink-600 font-semibold hover:text-pink-800">Pelajari Lebih Lanjut →</a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-3 text-center text-gray-500">Belum ada produk.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Event Mendatang -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Event Mendatang</h2>
            @if ($upcomingEvents->isEmpty())
                <p class="text-center text-gray-500">Tidak ada event mendatang saat ini.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center text-gray-900">
                    @foreach ($upcomingEvents as $event)
                        <div
                            class="bg-white border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition text-left">
                            @if ($event->gambar)
                                <img src="{{ Storage::url($event->gambar) }}" alt="{{ $event->nama }}"
                                    class="w-full h-56 object-cover">
                            @else
                                <div class="w-full h-56 bg-gray-200"></div>
                            @endif
                            <div class="p-6">
                                <p class="text-gray-500 text-sm mb-2 font-medium">
                                    {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }} • {{ $event->lokasi }}
                                </p>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $event->nama }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($event->deskripsi, 120) }}</p>
                                <a href="{{ route('events.index') }}"
                                    class="text-pink-600 font-semibold hover:text-pink-800">Lihat Event →</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Klien Kami -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-10">Klien Kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @forelse($kliens as $klien)
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-white w-24 h-24 rounded-lg shadow flex items-center justify-center overflow-hidden mb-3">
                            @if ($klien->logo)
                                <img src="{{ Storage::url($klien->logo) }}" alt="{{ $klien->nama }}"
                                    class="w-full h-full object-contain p-2 grayscale hover:grayscale-0 transition duration-300">
                            @else
                                <div
                                    class="w-full h-full flex items-center justify-center bg-gray-200 text-gray-500 text-2xl font-bold">
                                    {{ substr($klien->nama, 0, 1) }}
                                </div>
                            @endif
                        </div>
                        <p class="text-center text-sm font-medium text-gray-700">{{ $klien->nama }}</p>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">Belum ada klien.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-pink-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Siap Memulai Perjalanan Belajar Bahasa Jepang?</h2>
            <p class="text-pink-100 text-lg mb-8 max-w-2xl mx-auto">Kami menyediakan tutor bersertifikat dan materi yang
                terstruktur untuk memastikan Anda cepat menguasai bahasa Jepang untuk segala kebutuhan.</p>
            <a href="{{ route('kontak.index') }}"
                class="inline-block bg-white text-pink-600 font-bold py-3 px-8 rounded hover:bg-gray-100 transition">Hubungi
                Kami Sekarang</a>
        </div>
    </section>
@endsection
