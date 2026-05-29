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
                    <div
                        class="w-full h-80 bg-gray-200 rounded-lg shadow-lg flex items-center justify-center text-gray-400">
                        [Ilustrasi Sejarah Perusahaan]
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
                    <div
                        class="w-16 h-16 bg-pink-100 text-pink-600 rounded-full flex items-center justify-center text-3xl mb-6 md:mx-0 mx-auto">
                        👁️
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
                    <div
                        class="w-16 h-16 bg-gray-800 text-white rounded-full flex items-center justify-center text-3xl mb-6 mx-auto md:mx-0">
                        🎯
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center md:text-left">Misi Kami</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-pink-500 mr-2 font-bold">✓</span>
                            <span>Menyediakan kurikulum pembelajaran bahasa Jepang yang terstruktur, interaktif, dan
                                aplikatif.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-pink-500 mr-2 font-bold">✓</span>
                            <span>Menghadirkan tenaga pengajar dan profesional penerjemah yang tersertifikasi dan
                                berpengalaman.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-pink-500 mr-2 font-bold">✓</span>
                            <span>Menjalin kerjasama strategis dengan berbagai lembaga dan perusahaan di Jepang.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-pink-500 mr-2 font-bold">✓</span>
                            <span>Terus berinovasi dalam mengadopsi teknologi guna mempermudah akses belajar bagi seluruh
                                siswa di Indonesia.</span>
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
                <div
                    class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="text-4xl mb-4">👨‍🏫</div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Pengajar Berpengalaman</h4>
                    <p class="text-gray-600 text-sm">Tim tutor kami adalah tenaga pendidik bersertifikat N2/N1 dengan
                        pengalaman mengajar maupun bekerja langsung di Jepang.</p>
                </div>
                <div
                    class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="text-4xl mb-4">📚</div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Kurikulum Terstruktur</h4>
                    <p class="text-gray-600 text-sm">Materi dirancang agar mudah dipahami, sistematis, serta menyesuaikan
                        dengan kebutuhan target kompetensi standar Jepang.</p>
                </div>
                <div
                    class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="text-4xl mb-4">🏆</div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Sertifikasi JLPT</h4>
                    <p class="text-gray-600 text-sm">Fokus kami adalah kelulusan tinggi untuk ujian JLPT (N5 hingga N2)
                        maupun JFT-Basic dengan metode simulasi yang akurat.</p>
                </div>
                <div
                    class="border border-gray-100 rounded-lg shadow-sm p-6 border-t-4 border-t-pink-500 hover:shadow-md transition text-center">
                    <div class="text-4xl mb-4">🌐</div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Translator Profesional</h4>
                    <p class="text-gray-600 text-sm">Translasi dokumen hukum, teknis, bisnis, hingga layanan interpreter
                        on-site yang memegang teguh akurasi serta privasi.</p>
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
                <div class="bg-white rounded-lg shadow overflow-hidden text-center p-6">
                    <div
                        class="w-24 h-24 mx-auto rounded-full bg-pink-100 border-4 border-pink-200 flex items-center justify-center text-pink-600 text-2xl font-bold mb-4">
                        YK
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Yusuke Kenji</h3>
                    <p class="text-pink-500 font-medium mb-3">Direktur Utama</p>
                    <p class="text-gray-600 text-sm">Ahli linguistik Jepang yang telah berpengalaman lebih dari 20 tahun di
                        dunia pendidikan bahasa.</p>
                </div>

                <!-- Tim 2 -->
                <div class="bg-white rounded-lg shadow overflow-hidden text-center p-6">
                    <div
                        class="w-24 h-24 mx-auto rounded-full bg-pink-100 border-4 border-pink-200 flex items-center justify-center text-pink-600 text-2xl font-bold mb-4">
                        AR
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Ahmad Rizky</h3>
                    <p class="text-pink-500 font-medium mb-3">Head of Academic</p>
                    <p class="text-gray-600 text-sm">Pemegang sertifikat N1 dengan latar belakang pendidikan dari
                        Universitas di Tokyo.</p>
                </div>

                <!-- Tim 3 -->
                <div class="bg-white rounded-lg shadow overflow-hidden text-center p-6">
                    <div
                        class="w-24 h-24 mx-auto rounded-full bg-pink-100 border-4 border-pink-200 flex items-center justify-center text-pink-600 text-2xl font-bold mb-4">
                        SA
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Siti Aisyah</h3>
                    <p class="text-pink-500 font-medium mb-3">Lead Translator</p>
                    <p class="text-gray-600 text-sm">Interpreter tersertifikasi yang sering mendampingi delegasi
                        pemerintahan & bisnis multinasional.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
