<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Ayumi Nihonggo Gakkou</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">

    {{-- Topbar --}}
    <div class="bg-pink-600 text-white text-xs py-1.5 px-6 text-center tracking-wide hidden md:block">
        Selamat datang di PT Ayumi Nihonggo Gakkou — Kursus Bahasa Jepang Terpercaya
    </div>

    {{-- Navbar --}}
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center gap-3 flex-shrink-0">
                    <div class="w-10 h-10 rounded-full bg-pink-600 flex items-center justify-center flex-shrink-0 p-1">
                        <img src="{{ asset('images/logo-ayumi.png') }}"
                            class="w-full h-full rounded-full object-contain">
                    </div>
                    <div class="hidden sm:block">
                        <p class="text-sm font-bold text-gray-800 leading-tight">PT Ayumi</p>
                        <p class="text-xs text-pink-500 leading-tight">Nihonggo Gakkou</p>
                    </div>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden lg:flex items-center gap-0.5">
                    <a href="{{ url('/') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('/') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        Home
                    </a>
                    <a href="{{ url('/about') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('about') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        About
                    </a>

                    {{-- Dropdown Artikel --}}
                    <div class="relative group">
                        <button
                            class="flex items-center gap-1 px-3 py-2 text-sm rounded-md font-medium transition-colors
                            {{ request()->is('artikel*') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                            Artikel
                            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover:rotate-180"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div
                            class="absolute left-0 top-full mt-1 w-52 bg-white text-gray-700 rounded-xl shadow-xl border border-gray-100
                                    opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-150 z-50 overflow-hidden">
                            <a href="{{ route('artikel.index') }}"
                                class="flex items-center gap-2 px-4 py-2.5 text-sm hover:bg-pink-50 hover:text-pink-600 border-b border-gray-100 font-medium transition-colors">
                                <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                Semua Artikel
                            </a>
                            @php
                                $navKategoris = \App\Models\Article::select('kategori')->distinct()->get();
                            @endphp
                            @foreach ($navKategoris as $kat)
                                <a href="{{ route('artikel.kategori', $kat->kategori) }}"
                                    class="block px-4 py-2.5 text-sm hover:bg-pink-50 hover:text-pink-600 transition-colors">
                                    {{ $kat->kategori }}
                                </a>
                            @endforeach
                            @if ($navKategoris->isEmpty())
                                <span class="block px-4 py-2.5 text-sm text-gray-400 italic">Belum ada kategori</span>
                            @endif
                        </div>
                    </div>

                    <a href="{{ route('produk.index') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('produk') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        Produk
                    </a>
                    <a href="{{ route('galeri.index') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('galeri') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        Galeri
                    </a>
                    <a href="{{ route('events.index') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('events') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        Event
                    </a>
                    <a href="{{ route('kliens.index') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('kliens') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        Klien
                    </a>
                    <a href="{{ url('/kontak') }}"
                        class="px-3 py-2 text-sm rounded-md font-medium transition-colors
                        {{ request()->is('kontak') ? 'text-pink-600 bg-pink-50' : 'text-gray-600 hover:text-pink-600 hover:bg-pink-50' }}">
                        Kontak
                    </a>
                </div>

                {{-- Auth Buttons --}}
                <div class="hidden lg:flex items-center gap-2">
                    @auth
                        @if (auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}"
                                class="flex items-center gap-1.5 text-sm px-4 py-2 rounded-lg bg-pink-600 text-white hover:bg-pink-700 transition font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Dashboard
                            </a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"
                                class="text-sm px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:border-gray-300 transition font-medium">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-sm px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:border-pink-300 hover:text-pink-600 transition font-medium">
                            Login
                        </a>
                        <a href="{{ route('register') }}"
                            class="text-sm px-4 py-2 rounded-lg bg-pink-600 text-white hover:bg-pink-700 transition font-medium">
                            Register
                        </a>
                    @endauth
                </div>

                {{-- Mobile Hamburger --}}
                <button id="mobile-menu-btn"
                    class="lg:hidden p-2 rounded-md text-gray-500 hover:text-pink-600 hover:bg-pink-50 transition">
                    <svg id="icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white">
            <div class="px-4 pt-3 pb-4 space-y-1">
                <a href="{{ url('/') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('/') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Home</a>
                <a href="{{ url('/about') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('about') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">About</a>
                <a href="{{ route('artikel.index') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('artikel*') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Artikel</a>
                <a href="{{ route('produk.index') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('produk') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Produk</a>
                <a href="{{ route('galeri.index') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('galeri') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Galeri</a>
                <a href="{{ route('events.index') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('events') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Event</a>
                <a href="{{ route('kliens.index') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('kliens') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Klien</a>
                <a href="{{ url('/kontak') }}"
                    class="block px-3 py-2.5 text-sm rounded-md font-medium transition-colors {{ request()->is('kontak') ? 'text-pink-600 bg-pink-50' : 'text-gray-700 hover:text-pink-600 hover:bg-pink-50' }}">Kontak</a>
                <div class="pt-3 border-t border-gray-100 flex gap-2">
                    @auth
                        @if (auth()->user()->isAdmin())
                            <a href="{{ route('admin.dashboard') }}"
                                class="flex-1 text-center text-sm px-3 py-2 rounded-lg bg-pink-600 text-white hover:bg-pink-700 transition font-medium">Dashboard</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST" class="flex-1">
                            @csrf
                            <button type="submit"
                                class="w-full text-sm px-3 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 transition font-medium">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="flex-1 text-center text-sm px-3 py-2 rounded-lg border border-gray-200 text-gray-600 hover:border-pink-300 hover:text-pink-600 transition font-medium">Login</a>
                        <a href="{{ route('register') }}"
                            class="flex-1 text-center text-sm px-3 py-2 rounded-lg bg-pink-600 text-white hover:bg-pink-700 transition font-medium">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto px-6 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <div class="flex items-center gap-2.5">
                <img src="{{ asset('images/logo-ayumi.png') }}" class="w-7 h-7 rounded-full object-cover">
                <span class="text-sm font-semibold text-gray-700">PT Ayumi Nihonggo Gakkou</span>
            </div>
            <p class="text-xs text-gray-400">Design by <span class="text-pink-500 font-medium">Ahmad Mufarizal
                    Hammi</span></p>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>

</body>

</html>
