<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - PT Ayumi Nihonggo Gakkou</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    {{-- Mobile Overlay --}}
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-40 z-20 hidden lg:hidden" onclick="toggleSidebar()">
    </div>

    {{-- Sidebar --}}
    <aside id="sidebar"
        class="w-64 bg-gray-900 text-white flex flex-col min-h-screen fixed top-0 left-0 z-30 transition-transform duration-300 -translate-x-full lg:translate-x-0">

        {{-- Brand --}}
        <div class="px-5 py-5 border-b border-gray-700/60 flex items-center gap-3">
            <img src="{{ asset('images/logo-ayumi.png') }}"
                class="w-9 h-9 rounded-full object-cover ring-2 ring-pink-500/50">
            <div>
                <span class="font-bold text-sm block text-white">Ayumi Admin</span>
                <span class="text-xs text-gray-400">PT Ayumi Nihonggo Gakkou</span>
            </div>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 px-3 py-4 space-y-0.5 overflow-y-auto">

            {{-- Label --}}
            <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider px-3 pb-2 pt-1">Menu</p>

            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.dashboard') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Dashboard Icon --}}
                <svg class="w-4.5 h-4.5 flex-shrink-0" style="width:18px;height:18px" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
            </a>

            <a href="{{ route('admin.articles.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.articles*') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Article Icon --}}
                <svg class="flex-shrink-0" style="width:18px;height:18px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Artikel
            </a>

            <a href="{{ route('admin.produks.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.produks*') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Product/Box Icon --}}
                <svg class="flex-shrink-0" style="width:18px;height:18px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
                Produk
            </a>

            <a href="{{ route('admin.galeris.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.galeris*') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Image/Gallery Icon --}}
                <svg class="flex-shrink-0" style="width:18px;height:18px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Galeri
            </a>

            <a href="{{ route('admin.events.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.events*') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Calendar Icon --}}
                <svg class="flex-shrink-0" style="width:18px;height:18px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Event
            </a>

            <a href="{{ route('admin.kliens.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.kliens*') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Users/Handshake Icon --}}
                <svg class="flex-shrink-0" style="width:18px;height:18px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Klien
            </a>

            <a href="{{ route('admin.kontaks.index') }}"
                class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-colors
                {{ request()->routeIs('admin.kontaks*') ? 'bg-pink-600 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
                {{-- Mail Icon --}}
                <svg class="flex-shrink-0" style="width:18px;height:18px" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Pesan Masuk
                @php $unread = \App\Models\Kontak::where('status','belum_dibaca')->count(); @endphp
                @if ($unread > 0)
                    <span class="ml-auto bg-pink-500 text-white text-xs px-2 py-0.5 rounded-full font-semibold">
                        {{ $unread }}
                    </span>
                @endif
            </a>

        </nav>

        {{-- User Profile + Logout --}}
        <div class="p-4 border-t border-gray-700/60">
            <div class="flex items-center gap-3 mb-3">
                <div
                    class="w-8 h-8 rounded-full bg-pink-600 flex items-center justify-center text-white text-sm font-bold flex-shrink-0">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="overflow-hidden">
                    <p class="text-sm font-medium text-white truncate">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-gray-400 truncate">Administrator</p>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center justify-center gap-2 bg-gray-800 hover:bg-gray-700 text-gray-300 hover:text-white text-sm py-2 rounded-lg transition font-medium border border-gray-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </aside>

    {{-- Main Content --}}
    <div class="lg:ml-64 flex flex-col min-h-screen">

        {{-- Top Header --}}
        <header
            class="bg-white border-b border-gray-200 px-4 sm:px-6 py-3.5 sticky top-0 z-10 flex items-center gap-4">
            {{-- Mobile toggle --}}
            <button onclick="toggleSidebar()"
                class="lg:hidden p-1.5 rounded-md text-gray-500 hover:text-pink-600 hover:bg-pink-50 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="flex items-center gap-2">
                {{-- Breadcrumb separator --}}
                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <h2 class="text-gray-800 font-semibold text-sm">@yield('page-title', 'Dashboard')</h2>
            </div>
            <div class="ml-auto flex items-center gap-2">
                <span class="hidden sm:block text-xs text-gray-400">{{ now()->translatedFormat('d F Y') }}</span>
                <div
                    class="w-7 h-7 rounded-full bg-pink-600 flex items-center justify-center text-white text-xs font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="p-4 sm:p-6 flex-1 bg-gray-50">
            @yield('content')
        </main>

        {{-- Footer --}}
        <footer class="bg-white border-t border-gray-200 px-6 py-3 text-center text-xs text-gray-400">
            Design by <span class="text-pink-500 font-medium">Ahmad Mufarizal Hammi</span>
        </footer>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>

</body>

</html>
