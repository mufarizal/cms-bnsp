@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800">Kontak Kami</h2>
            <p class="text-gray-500 text-sm mt-1">Ada pertanyaan? Kami siap membantu Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- Info Kontak --}}
            <div class="space-y-5">
                <div class="bg-white rounded-lg shadow p-5">
                    <h3 class="font-semibold text-gray-800 mb-4">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="text-pink-500 text-lg">📍</span>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Alamat</p>
                                <p class="text-sm text-gray-500">Jl. Bahasa Jepang No. 1,<br>Jakarta Selatan, 12345</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-pink-500 text-lg">📞</span>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Telepon</p>
                                <p class="text-sm text-gray-500">+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-pink-500 text-lg">✉️</span>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Email</p>
                                <p class="text-sm text-gray-500">info@ayuminihonggo.com</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-pink-500 text-lg">🕐</span>
                            <div>
                                <p class="text-sm font-medium text-gray-700">Jam Operasional</p>
                                <p class="text-sm text-gray-500">Senin - Sabtu<br>08.00 - 17.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Form Kontak --}}
            <div class="md:col-span-2">
                <div class="bg-white rounded-lg shadow p-6">

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-5">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h3 class="font-semibold text-gray-800 mb-5">Kirim Pesan</h3>

                    <form action="{{ route('kontak.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" name="nama" value="{{ old('nama') }}"
                                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400
                                           {{ $errors->has('nama') ? 'border-red-400' : '' }}"
                                    placeholder="Nama Anda">
                                @error('nama')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400
                                           {{ $errors->has('email') ? 'border-red-400' : '' }}"
                                    placeholder="email@contoh.com">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                            <input type="text" name="subjek" value="{{ old('subjek') }}"
                                class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400
                                       {{ $errors->has('subjek') ? 'border-red-400' : '' }}"
                                placeholder="Subjek pesan Anda">
                            @error('subjek')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                            <textarea name="pesan" rows="5"
                                class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-pink-400
                                       {{ $errors->has('pesan') ? 'border-red-400' : '' }}"
                                placeholder="Tulis pesan Anda di sini...">{{ old('pesan') }}</textarea>
                            @error('pesan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-pink-500 hover:bg-pink-600 text-white py-2.5 rounded transition text-sm font-medium">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
