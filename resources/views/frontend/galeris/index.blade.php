@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-gray-800">Galeri Foto</h2>
        <p class="text-gray-500 text-sm mt-1">Dokumentasi kegiatan PT Ayumi Nihonggo Gakkou</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        @forelse($galeris as $galeri)
            <div class="relative group overflow-hidden rounded-lg shadow cursor-pointer"
                onclick="openModal('{{ Storage::url($galeri->gambar) }}', '{{ $galeri->judul }}', '{{ $galeri->keterangan }}')">
                <img src="{{ Storage::url($galeri->gambar) }}"
                    class="w-full h-56 object-cover group-hover:scale-105 transition duration-300">
                <div
                    class="absolute inset-0  bg-opacity-0 group-hover:bg-opacity-40
                            transition duration-300 flex items-end">
                    <div class="p-4 text-white translate-y-full group-hover:translate-y-0 transition duration-300">
                        <p class="font-semibold text-sm">{{ $galeri->judul }}</p>
                        @if ($galeri->keterangan)
                            <p class="text-xs opacity-80">{{ $galeri->keterangan }}</p>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-16 text-gray-400">
                Belum ada foto di galeri.
            </div>
        @endforelse
    </div>

    {{-- Modal Lightbox --}}
    <div id="modal" class="fixed inset-0 bg-black  bg-opacity-80 z-50 hidden items-center justify-center p-4"
        onclick="closeModal()">
        <div class="max-w-3xl w-full" onclick="event.stopPropagation()">
            <img id="modalImg" src="" class="w-full max-h-[70vh] object-contain rounded-lg">
            <div class="text-white mt-3 text-center">
                <p id="modalJudul" class="font-semibold"></p>
                <p id="modalKet" class="text-sm opacity-70"></p>
            </div>
            <button onclick="closeModal()"
                class="absolute top-4 right-4 text-white text-2xl font-bold hover:text-pink-400">✕</button>
        </div>
    </div>

    <script>
        function openModal(src, judul, ket) {
            document.getElementById('modalImg').src = src;
            document.getElementById('modalJudul').textContent = judul;
            document.getElementById('modalKet').textContent = ket;
            document.getElementById('modal').classList.remove('hidden');
            document.getElementById('modal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
            document.getElementById('modal').classList.remove('flex');
        }
    </script>
@endsection
