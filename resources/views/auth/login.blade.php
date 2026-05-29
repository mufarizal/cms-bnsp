@extends('layouts.app')

@section('content')
    <section class="min-h-[75vh] flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border-t-4 border-pink-600">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Masuk ke Akun</h2>
                <p class="text-gray-500 mt-2">Selamat datang kembali di Ayumi Nihonggo Gakkou</p>
            </div>

            @if (session('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded mb-6" role="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif

            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Alamat Email</label>
                    <input type="email" id="email" name="email" required autofocus
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition">
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-pink-600 hover:bg-pink-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                        Masuk Sekarang
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-bold text-pink-600 hover:text-pink-800 transition">Daftar
                        di sini</a>
                </p>
            </div>
        </div>
    </section>
@endsection
