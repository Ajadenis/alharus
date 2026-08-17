<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    protected $kegiatan = [
        [
            'slug' => 'isra-miraj',
            'judul' => "Isra Mi'raj",
            'gambar' => 'isra-miraj/17.jpg',
            'ringkasan' => "Isra Mi'raj adalah peristiwa penting dalam sejarah Islam, yang terjadi pada malam 27 Rajab tahun ke-12 kenabian Nabi Muhammad SAW.",
            'deskripsi' => "Isra Mi'raj adalah peristiwa penting dalam sejarah Islam, yang terjadi pada malam 27 Rajab tahun ke-12 kenabian Nabi Muhammad SAW. Isra Miraj terjadi ketika Nabi Muhammad SAW sedang berada di Masjidil Haram di Mekkah. Dalam peristiwa ini, Nabi Muhammad melakukan perjalanan malam dari Masjidil Haram ke Masjidil Aqsa di Yerusalem dengan menggunakan Buraq. Setelah sampai di Masjidil Aqsa, Nabi Muhammad SAW melanjutkan perjalanan ke Sidratul Muntaha yang berada di lapisan langit ke tujuh dan bertemu dengan para Nabi terdahulu pada setiap lapisan yang dilewati.",
            'kategori' => 'Keagamaan',
            'tanggal' => '2024-01-27',
            'views' => 150,
        ],
        [
            'slug' => 'hari-santri-sambara-sunda',
            'judul' => 'Hari Santri x Sambara Sunda',
            'gambar' => 'hari-santri/santri-5.jpg',
            'ringkasan' => 'Jati diri Sunda nu ngagabungkeun kakayaan rasa (sambara) jeung kaéndahan tradisi.',
            'deskripsi' => 'Jati diri Sunda nu ngagabungkeun kakayaan rasa (sambara) jeung kaéndahan tradisi. Ngahadirkeun suasana haneut tur oténtik, pikeun ngajaga budaya urang tetep nyantika (éndah) jeung dinamis (hirup). Wadah panggelaran seni jeung budaya tatar Sunda. Léngkah nyata ngamumulé warisan karuhun ku cara wani tandang jeung wani tanding dina kaéndahan tradisi jeung kréasi.',
            'kategori' => 'Budaya',
            'tanggal' => '2024-10-22',
            'views' => 89,
        ],
        [
            'slug' => 'kaulinan-barudak-rerebonan',
            'judul' => 'Kaulinan Barudak - Rerebonan',
            'gambar' => 'kaulinan-barudak/Rerebonan/rebon-7.jpg',
            'ringkasan' => 'Rerebonan adalah salah satu permainan tradisional Sunda yang mengajarkan kerjasama dan kebersamaan.',
            'deskripsi' => 'Rerebonan adalah permainan tradisional dari tanah Sunda yang dimainkan oleh anak-anak. Permainan ini mengajarkan nilai-nilai kerjasama, kebersamaan, dan sportivitas. Dalam permainan ini, anak-anak belajar untuk bekerja sama dalam tim dan menghargai lawan main.',
            'kategori' => 'Permainan Tradisional',
            'tanggal' => '2024-08-15',
            'views' => 45,
        ],
        [
            'slug' => 'kaulinan-barudak-sapintrong',
            'judul' => 'Kaulinan Barudak - Sapintrong',
            'gambar' => 'kaulinan-barudak/Sapintrong/sapintrong-4.jpg',
            'ringkasan' => 'Sapintrong adalah permainan tradisional Sunda yang melatih ketangkasan dan kecepatan.',
            'deskripsi' => 'Sapintrong adalah salah satu permainan tradisional Sunda yang sangat populer di kalangan anak-anak. Permainan ini melatih ketangkasan, kecepatan, dan strategi. Anak-anak belajar untuk berpikir cepat dan mengambil keputusan dalam waktu singkat.',
            'kategori' => 'Permainan Tradisional',
            'tanggal' => '2024-09-10',
            'views' => 34,
        ],
        [
            'slug' => 'pondok-ramadhan',
            'judul' => 'Pondok Ramadhan 2024',
            'gambar' => 'pondok-ramadhan/ramadhan-1.jpg',
            'ringkasan' => 'Kegiatan Pondok Ramadhan untuk santri MDT Al-Harus yang diisi dengan berbagai kegiatan ibadah dan pembelajaran.',
            'deskripsi' => 'Pondok Ramadhan adalah kegiatan tahunan yang diadakan di MDT Al-Harus selama bulan Ramadhan. Kegiatan ini diisi dengan berbagai program seperti tadarus Al-Quran, kajian Islam, shalat tarawih berjamaah, dan berbagai lomba keagamaan. Tujuan dari kegiatan ini adalah untuk meningkatkan keimanan dan ketakwaan para santri.',
            'kategori' => 'Keagamaan',
            'tanggal' => '2024-03-15',
            'views' => 210,
        ],
        [
            'slug' => 'perpisahan-santri',
            'judul' => 'Acara Perpisahan Santri Angkatan 2024',
            'gambar' => 'perpisahan/perpisahan-1.jpg',
            'ringkasan' => 'Acara perpisahan untuk santri angkatan 2024 yang telah menyelesaikan pendidikan di MDT Al-Harus.',
            'deskripsi' => 'Acara perpisahan ini merupakan momen haru bagi para santri angkatan 2024 yang telah menyelesaikan masa pendidikan mereka di MDT Al-Harus. Acara diisi dengan berbagai pertunjukan seni, pidato perpisahan, dan pemberian penghargaan kepada santri berprestasi.',
            'kategori' => 'Acara',
            'tanggal' => '2024-06-20',
            'views' => 78,
        ],
    ];

    public function index(Request $request)
    {
        $data = $this->kegiatan;
        
        // 🔍 FITUR PENCARIAN
        if ($request->has('search') && !empty($request->search)) {
            $search = strtolower($request->search);
            $data = array_filter($data, function($item) use ($search) {
                return strpos(strtolower($item['judul']), $search) !== false ||
                       strpos(strtolower($item['ringkasan']), $search) !== false ||
                       strpos(strtolower($item['deskripsi']), $search) !== false;
            });
            // Reset index array
            $data = array_values($data);
        }
        
        // Filter kategori
        if ($request->has('kategori') && !empty($request->kategori) && $request->kategori != 'semua') {
            $data = array_filter($data, function($item) use ($request) {
                return $item['kategori'] == $request->kategori;
            });
            $data = array_values($data);
        }
        
        // Urutkan dari terbaru (berdasarkan tanggal)
        usort($data, function($a, $b) {
            return strtotime($b['tanggal']) - strtotime($a['tanggal']);
        });
        
        // Ambil daftar kategori unik untuk filter
        $kategoriList = array_unique(array_column($this->kegiatan, 'kategori'));
        $kategoriList = array_values($kategoriList);
        
        // 📋 AMBIL KEGIATAN TERBARU UNTUK SIDEBAR
        $kegiatanTerbaru = $this->kegiatan;
        usort($kegiatanTerbaru, function($a, $b) {
            return strtotime($b['tanggal']) - strtotime($a['tanggal']);
        });
        $kegiatanTerbaru = array_slice($kegiatanTerbaru, 0, 5);
        
        return view('kegiatan.index', compact('data', 'kategoriList', 'kegiatanTerbaru'));
    }

    public function show($slug)
    {
        $item = collect($this->kegiatan)->firstWhere('slug', $slug);

        if (!$item) {
            abort(404);
        }
        
        // 📋 AMBIL KEGIATAN TERBARU UNTUK SIDEBAR
        $kegiatanTerbaru = $this->kegiatan;
        usort($kegiatanTerbaru, function($a, $b) {
            return strtotime($b['tanggal']) - strtotime($a['tanggal']);
        });
        $kegiatanTerbaru = array_slice($kegiatanTerbaru, 0, 5);
        
        // Kegiatan terkait (kategori yang sama)
        $kegiatanTerkait = array_filter($this->kegiatan, function($data) use ($item) {
            return $data['slug'] != $item['slug'] && $data['kategori'] == $item['kategori'];
        });
        $kegiatanTerkait = array_slice(array_values($kegiatanTerkait), 0, 3);

        return view('kegiatan.show', compact('item', 'kegiatanTerbaru', 'kegiatanTerkait'));
    }
}