@extends('layouts.app')

@section('content')
    <!-- Page Header -->
    <section class="py-16 bg-gradient-to-r from-pink-600 to-pink-500 text-center">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Tentang Kami</h1>
            <p class="text-pink-100 text-lg">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a> / Tentang Kami
            </p>
        </div>
    </section>

    <!-- Sejarah Perusahaan -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2 border-l-4 border-pink-500 pl-6">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah Perusahaan</h2>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        PT Ayumi Nihonggo Gakkou didirikan pada tahun 2015 di Jakarta dengan tujuan utama untuk menjembatani
                        kebutuhan pendidikan bahasa Jepang dan layanan penerjemahan profesional (Interpreter dan Translator)
                        baik untuk keperluan bisnis maupun personal.
                    </p>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Berawal dari sebuah lembaga kursus kecil, kami telah berkembang pesat seiring dengan meningkatnya
                        minat masyarakat Indonesia terhadap budaya dan peluang kerja di Jepang. Kami mulai memperluas
                        layanan kami untuk mencakup persiapan bekerja di Jepang, program magang (Ginou Jisshusei), hingga
                        konsultasi studi di universitas Jepang.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Saat ini, PT Ayumi Nihonggo Gakkou telah dipercaya oleh berbagai instansi, perusahaan lokal maupun
                        multinasional, serta ribuan siswa yang sukses mencapai impian mereka mahir berbahasa Jepang.
                    </p>
                </div>
                <div class="md:w-1/2">
                    {{-- Gambar statis ilustrasi sejarah --}}
                    <div class="relative w-full h-80 rounded-lg shadow-lg overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=800&q=80"
                            alt="Suasana belajar bahasa Jepang"
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-pink-600/30 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 bg-white/95 rounded-lg px-4 py-2 flex items-center gap-2 text-sm font-semibold text-pink-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            Berdiri sejak 2015
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Visi -->
                <div class="bg-white rounded-lg shadow p-8 text-center md:text-left transition hover:shadow-lg">
                    <div class="w-16 h-16 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center mb-6 md:mx-0 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center md:text-left">Visi Kami</h3>
                    <p class="text-gray-700 leading-relaxed text-center md:text-left">
                        Menjadi institusi pendidikan bahasa Jepang terkemuka di Indonesia yang mencetak generasi kompeten,
                        berkarakter, dan siap bersaing di ranah global, serta menjadi penyedia layanan terjemahan bahasa
                        Jepang terbaik yang mengutamakan kualitas, kecepatan, dan profesionalisme.
                    </p>
                </div>

                <!-- Misi -->
                <div class="bg-white rounded-lg shadow p-8 transition hover:shadow-lg">
                    <div class="w-16 h-16 bg-gray-800 text-white rounded-full flex items-center justify-center mb-6 mx-auto md:mx-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center md:text-left">Misi Kami</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-pink-500 mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span>Menyediakan kurikulum pembelajaran bahasa Jepang yang terstruktur, interaktif, dan aplikatif.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-pink-500 mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span>Menghadirkan tenaga pengajar dan profesional penerjemah yang tersertifikasi dan berpengalaman.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-pink-500 mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span>Menjalin kerjasama strategis dengan berbagai lembaga dan perusahaan di Jepang.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-pink-500 mt-0.5 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            <span>Terus berinovasi dalam mengadopsi teknologi guna mempermudah akses belajar bagi seluruh siswa di Indonesia.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Mengapa Memilih Kami -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Pengajar Berpengalaman</h4>
                    <p class="text-gray-600 text-sm">Tim tutor kami adalah tenaga pendidik bersertifikat N2/N1 dengan pengalaman mengajar maupun bekerja langsung di Jepang.</p>
                </div>
                <div class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Kurikulum Terstruktur</h4>
                    <p class="text-gray-600 text-sm">Materi dirancang agar mudah dipahami, sistematis, serta menyesuaikan dengan kebutuhan target kompetensi standar Jepang.</p>
                </div>
                <div class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Sertifikasi JLPT</h4>
                    <p class="text-gray-600 text-sm">Fokus kami adalah kelulusan tinggi untuk ujian JLPT (N5 hingga N2) maupun JFT-Basic dengan metode simulasi yang akurat.</p>
                </div>
                <div class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="w-12 h-12 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Translator Profesional</h4>
                    <p class="text-gray-600 text-sm">Translasi dokumen hukum, teknis, bisnis, hingga layanan interpreter on-site yang memegang teguh akurasi serta privasi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tim Kami -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Tim Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Tim 1 -->
                <div class="bg-white rounded-lg shadow overflow-hidden text-center">
                    {{-- Header strip + avatar --}}
                    <div class="h-16 bg-gradient-to-r from-pink-100 to-pink-50"></div>
                    <div class="-mt-10 flex justify-center">
                        <div class="w-20 h-20 rounded-full border-4 border-white shadow flex items-center justify-center text-white text-xl font-bold"
                             style="background: linear-gradient(135deg, #db2777, #9333ea);">
                            YK
                        </div>
                    </div>
                    <div class="p-6 pt-3">
                        <h3 class="text-xl font-bold text-gray-900">Yusuke Kenji</h3>
                        <p class="text-pink-500 font-medium mb-3">Direktur Utama</p>
                        <p class="text-gray-600 text-sm mb-4">Ahli linguistik Jepang yang telah berpengalaman lebih dari 20 tahun di dunia pendidikan bahasa.</p>
                        <div class="flex justify-center gap-2 flex-wrap">
                            <span class="text-xs bg-pink-50 text-pink-700 font-medium px-3 py-1 rounded-full">20+ Tahun</span>
                            <span class="text-xs bg-pink-50 text-pink-700 font-medium px-3 py-1 rounded-full">Linguistik</span>
                        </div>
                    </div>
                </div>

                <!-- Tim 2 -->
                <div class="bg-white rounded-lg shadow overflow-hidden text-center">
                    <div class="h-16 bg-gradient-to-r from-blue-100 to-cyan-50"></div>
                    <div class="-mt-10 flex justify-center">
                        <div class="w-20 h-20 rounded-full border-4 border-white shadow flex items-center justify-center text-white text-xl font-bold"
                             style="background: linear-gradient(135deg, #2563eb, #0891b2);">
                            AR
                        </div>
                    </div>
                    <div class="p-6 pt-3">
                        <h3 class="text-xl font-bold text-gray-900">Ahmad Rizky</h3>
                        <p class="text-pink-500 font-medium mb-3">Head of Academic</p>
                        <p class="text-gray-600 text-sm mb-4">Pemegang sertifikat N1 dengan latar belakang pendidikan dari Universitas di Tokyo.</p>
                        <div class="flex justify-center gap-2 flex-wrap">
                            <span class="text-xs bg-pink-50 text-pink-700 font-medium px-3 py-1 rounded-full">JLPT N1</span>
                            <span class="text-xs bg-pink-50 text-pink-700 font-medium px-3 py-1 rounded-full">Tokyo Univ.</span>
                        </div>
                    </div>
                </div>

                <!-- Tim 3 -->
                <div class="bg-white rounded-lg shadow overflow-hidden text-center">
                    <div class="h-16 bg-gradient-to-r from-pink-100 to-orange-50"></div>
                    <div class="-mt-10 flex justify-center">
                        <div class="w-20 h-20 rounded-full border-4 border-white shadow flex items-center justify-center text-white text-xl font-bold"
                             style="background: linear-gradient(135deg, #ec4899, #f97316);">
                            SA
                        </div>
                    </div>
                    <div class="p-6 pt-3">
                        <h3 class="text-xl font-bold text-gray-900">Siti Aisyah</h3>
                        <p class="text-pink-500 font-medium mb-3">Lead Translator</p>
                        <p class="text-gray-600 text-sm mb-4">Interpreter tersertifikasi yang sering mendampingi delegasi pemerintahan & bisnis multinasional.</p>
                        <div class="flex justify-center gap-2 flex-wrap">
                            <span class="text-xs bg-pink-50 text-pink-700 font-medium px-3 py-1 rounded-full">Pemerintahan</span>
                            <span class="text-xs bg-pink-50 text-pink-700 font-medium px-3 py-1 rounded-full">Multinasional</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection