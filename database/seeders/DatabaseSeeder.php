<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Article;
use App\Models\Produk;
use App\Models\Galeri;
use App\Models\Event;
use App\Models\Klien;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@ayumi.com'],
            [
                'name'     => 'Admin Ayumi',
                'password' => Hash::make('password123'),
                'role'     => 'admin',
            ]
        );

        // Articles
        $articles = [
            [
                'judul'     => 'Mengenal Huruf Hiragana untuk Pemula',
                'kategori'  => 'Konsep Teknologi Informasi',
                'ringkasan' => 'Hiragana adalah huruf dasar bahasa Jepang yang wajib dikuasai pemula.',
                'isi'       => 'Hiragana merupakan salah satu dari tiga sistem penulisan bahasa Jepang. Terdiri dari 46 karakter dasar yang merepresentasikan suku kata. Mempelajari hiragana adalah langkah pertama yang harus dilakukan oleh setiap pelajar bahasa Jepang.',
            ],
            [
                'judul'     => 'Tips Lulus JLPT N5 dalam 3 Bulan',
                'kategori'  => 'Tips Belajar',
                'ringkasan' => 'Strategi belajar efektif untuk lulus ujian JLPT N5 dalam waktu singkat.',
                'isi'       => 'JLPT N5 adalah level terendah dalam Japanese Language Proficiency Test. Dengan strategi yang tepat, Anda bisa lulus dalam 3 bulan. Fokus pada kosakata dasar, tata bahasa sederhana, dan latihan soal secara konsisten.',
            ],
            [
                'judul'     => 'Peluang Karir Translator Bahasa Jepang di Indonesia',
                'kategori'  => 'Karir',
                'ringkasan' => 'Kebutuhan translator bahasa Jepang di Indonesia terus meningkat seiring investasi Jepang.',
                'isi'       => 'Indonesia dan Jepang memiliki hubungan bisnis yang sangat erat. Banyak perusahaan Jepang berinvestasi di Indonesia, sehingga kebutuhan akan tenaga translator profesional terus meningkat.',
            ],
            [
                'judul'     => 'Perbedaan Bahasa Jepang Formal dan Informal',
                'kategori'  => 'Tips Belajar',
                'ringkasan' => 'Memahami konteks penggunaan bahasa Jepang formal (keigo) dan informal sehari-hari.',
                'isi'       => 'Dalam bahasa Jepang, terdapat perbedaan signifikan antara bahasa formal (keigo) yang digunakan di lingkungan kerja dan bahasa informal yang digunakan sehari-hari.',
            ],
            [
                'judul'     => 'Mengenal Budaya Kerja Jepang: Etos dan Disiplin',
                'kategori'  => 'Budaya',
                'ringkasan' => 'Memahami budaya kerja Jepang sebagai bekal berkarir di perusahaan Jepang.',
                'isi'       => 'Budaya kerja Jepang dikenal dengan konsep Kaizen (perbaikan berkelanjutan) dan Monozukuri (semangat membuat sesuatu). Memahami budaya ini akan sangat membantu Anda beradaptasi saat bekerja di perusahaan Jepang.',
            ],
        ];

        foreach ($articles as $article) {
            Article::create([
                'judul'          => $article['judul'],
                'slug'           => Str::slug($article['judul']),
                'kategori'       => $article['kategori'],
                'ringkasan'      => $article['ringkasan'],
                'isi'            => $article['isi'],
                'thumbnail'      => null,
                'file_attachment' => null,
            ]);
        }

        // Produk
        $produks = [
            [
                'nama'      => 'Kursus Bahasa Jepang N5',
                'deskripsi' => 'Program kursus intensif untuk pemula. Mencakup hiragana, katakana, kosakata dasar, dan tata bahasa level N5 JLPT.',
                'harga'     => 'Rp 750.000 / bulan',
            ],
            [
                'nama'      => 'Kursus Bahasa Jepang N4',
                'deskripsi' => 'Lanjutan dari N5. Memperdalam kemampuan membaca, menulis, dan percakapan level menengah.',
                'harga'     => 'Rp 900.000 / bulan',
            ],
            [
                'nama'      => 'Kursus Bahasa Jepang N3',
                'deskripsi' => 'Program intensif untuk level menengah atas. Cocok untuk persiapan kerja di perusahaan Jepang.',
                'harga'     => 'Rp 1.100.000 / bulan',
            ],
            [
                'nama'      => 'Jasa Penerjemah Dokumen',
                'deskripsi' => 'Layanan penerjemahan dokumen resmi Jepang-Indonesia / Indonesia-Jepang. Cepat, akurat, dan tersertifikasi.',
                'harga'     => 'Rp 150.000 / halaman',
            ],
            [
                'nama'      => 'Jasa Interpreter Bisnis',
                'deskripsi' => 'Penyediaan interpreter profesional untuk meeting, negosiasi, dan kunjungan bisnis dengan mitra Jepang.',
                'harga'     => 'Hubungi Kami',
            ],
            [
                'nama'      => 'Kelas Persiapan Wawancara Kerja Jepang',
                'deskripsi' => 'Program khusus persiapan wawancara kerja di perusahaan Jepang. Meliputi simulasi wawancara dan etika bisnis Jepang.',
                'harga'     => 'Rp 500.000 / paket',
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create([...$produk, 'gambar' => null]);
        }

        // Galeri
        $galeris = [
            ['judul' => 'Kelas Bahasa Jepang N5',         'keterangan' => 'Suasana belajar kelas N5 bersama pengajar'],
            ['judul' => 'Workshop JLPT 2024',              'keterangan' => 'Peserta workshop persiapan JLPT'],
            ['judul' => 'Sesi Percakapan Bahasa Jepang',   'keterangan' => 'Latihan percakapan dengan native speaker'],
            ['judul' => 'Wisuda Peserta Kursus',           'keterangan' => 'Upacara wisuda peserta kursus angkatan 2024'],
            ['judul' => 'Festival Budaya Jepang',          'keterangan' => 'Peserta mengenakan yukata dalam festival tahunan'],
            ['judul' => 'Kunjungan ke Kedutaan Jepang',    'keterangan' => 'Kunjungan resmi ke Kedutaan Besar Jepang di Jakarta'],
        ];

        foreach ($galeris as $galeri) {
            Galeri::create([...$galeri, 'gambar' => null]);
        }

        // Event
        $events = [
            [
                'nama'      => 'Workshop JLPT N5 Intensif',
                'deskripsi' => 'Workshop persiapan ujian JLPT N5 selama satu hari penuh bersama pengajar berpengalaman.',
                'tanggal'   => now()->addDays(14)->format('Y-m-d'),
                'lokasi'    => 'Gedung Ayumi, Jakarta Selatan',
            ],
            [
                'nama'      => 'Seminar Peluang Kerja di Jepang',
                'deskripsi' => 'Seminar gratis membahas peluang bekerja di Jepang untuk lulusan fresh graduate.',
                'tanggal'   => now()->addDays(30)->format('Y-m-d'),
                'lokasi'    => 'Aula Utama, Jakarta Pusat',
            ],
            [
                'nama'      => 'Festival Budaya Jepang Ayumi 2024',
                'deskripsi' => 'Perayaan budaya Jepang tahunan dengan berbagai pertunjukan, permainan, dan kuliner khas Jepang.',
                'tanggal'   => now()->subDays(30)->format('Y-m-d'),
                'lokasi'    => 'Taman Mini Indonesia Indah, Jakarta',
            ],
            [
                'nama'      => 'Kelas Perkenalan Bahasa Jepang Gratis',
                'deskripsi' => 'Kelas trial gratis untuk mengenal bahasa Jepang dari nol. Terbuka untuk umum.',
                'tanggal'   => now()->subDays(60)->format('Y-m-d'),
                'lokasi'    => 'Online via Zoom',
            ],
        ];

        foreach ($events as $event) {
            Event::create([...$event, 'gambar' => null]);
        }

        // Klien
        $kliens = [
            ['nama' => 'PT Toyota Astra Motor',        'website' => 'https://toyota.astra.co.id'],
            ['nama' => 'PT Honda Prospect Motor',      'website' => 'https://honda-indonesia.com'],
            ['nama' => 'PT Panasonic Manufacturing',   'website' => 'https://panasonic.com'],
            ['nama' => 'PT Sharp Electronics Indonesia', 'website' => 'https://sharp-indonesia.com'],
            ['nama' => 'PT Yamaha Indonesia',          'website' => 'https://yamaha-motor.co.id'],
            ['nama' => 'PT Uni-Charm Indonesia',       'website' => 'https://unicharm.co.id'],
            ['nama' => 'Kedutaan Besar Jepang',        'website' => 'https://id.emb-japan.go.jp'],
            ['nama' => 'Japan Foundation Jakarta',     'website' => 'https://jpf.or.id'],
        ];

        foreach ($kliens as $klien) {
            Klien::create([...$klien, 'logo' => null]);
        }
    }
}