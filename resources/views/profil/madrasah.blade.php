@extends('layouts.app')

@push('madrasah')
    <link rel="stylesheet" href="{{ asset('css/madrasah.css') }}">
@endpush

@section('content')
<!-- Section Madrasah Start -->
    <section id="madrasah" class="madrasah">
      <h2>PROFIL MADRASAH AL-HARUS</h2>
      <table style="width: 100%">
        <caption>
          IDENTITAS MADRASAH AL-HARUS
        </caption>
        <tr>
          <td>Nama Madrasah</td>
          <td>: Madrasah Al-Harus</td>
        </tr>
        <tr>
          <td>Nama Yayasan/Penyelenggara</td>
          <td>: Yayasan Al-Harus</td>
        </tr>
        <tr>
          <td>Nomor Statistik Diniyah Takmiliyah (NSDT)</td>
          <td>: 311 2.32.40.1232</td>
        </tr>
        <tr>
          <td>Legalitas</td>
          <td>: SK Menteri Kehakiman dan HAM No.C218 tahun 2004</td>
        </tr>
        <tr>
          <td>Alamat Madrasah</td>
          <td>
            : Jl.Raya Andir Katapang N0.206 RT 006 RW 003 kelurahan Andir,
            kecamatan baleendah, Kabupaten Bandung.
          </td>
        </tr>
        <tr>
          <td>Status Tanah</td>
          <td>: Wakaf</td>
        </tr>
        <tr>
          <td>Luas Tanah</td>
          <td>: ±3500 m2</td>
        </tr>
      </table>
      <h3>Kepala Madrasah</h3>
      <div class="head-img">
        <img src="{{ asset('images/guru-azyuber.jpg') }}" alt="Kepala Madrasah" />
      </div>
      <table style="margin: 1rem auto">
        <tr>
          <td>Nama</td>
          <td>: Asep sopandi S.Kom.i</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>: Kp Bahuan rt 9 rw 3</td>
        </tr>
        <tr>
          <td>Tempat, Tanggal, Lahir</td>
          <td>: Bandung, 02 September 1990</td>
        </tr>
        <tr>
          <td>Pendidikan Terakhir / Jurusan</td>
          <td>: S1 / managemen dakwah fakultas dakwah dan komunikasi</td>
        </tr>
        <tr>
          <td>Jabatan</td>
          <td>: Kepala Madrasah / Wali kelas / Bidang study</td>
        </tr>
      </table>
      <h3>SEJARAH MADRASAH AL-HARUS</h3>
      <p>
        Yayasan Pendidikan islam Al-harus didirikan pada tahun 1993 oleh
        <strong>KH Lukman Firdaus</strong> dan
        <strong>Ibu hj hana quroisin</strong>. Yayasan Pendidikan islam Al-Harus
        berdiri di tanah yang di wakafkan oleh <strong>H.rustama</strong> yang
        terletak di jln raya katapang NO 206 kelurahan andir kecamatan baleendah
        kabupaten bandung.
      </p>
      <br /><br />
      <p>
        Sejarah Awal mulanya Al-Harus berdiri di tanah seluas ± 500 m2 dengan
        memiliki 1 masjid dan hanya mnyelenggarakan pengajian harian kecil di
        rumah <strong>KH Lukman Firdaus</strong>. Namun melihat semakin
        meningkatnya kebutuhan masyarakat akan sarana pendidikan Islam pada
        waltu itu , Beliau berusaha dengan penuh semangat untuk senantiasa
        memenuhi kebutuhan masyarakat tersebut sehingga pada tahun 2004, beliau
        memperluas tanah menjadi ±3500 m2 sekaligus berdirilah Pendidikan islam
        non formal madarasah diniyah takmiliyah alharus.
      </p>
      <br /><br />
      <div class="row">
        <div class="madrasah-img">
          <img src="{{ asset('images/bg-1.jpg') }}" alt="Berita" />
        </div>
        <div class="content">
          <p>
            Tidak hanya itu setelah diresmikannya Madrasah Diniyah Takmiliyah
            Al-Harus dengan berlebelkan
            <i>SK Menteri Kehakiman dan HAM No.C218 tahun 2004</i> dan tercatat
            resmi di Departemen Agama Kabupaten Bandung, dari tahun ketahun
            Madrasah Diniyah Takmiliyah Al-Harus mencatatkan rekor, sebagai
            salah madrasah Pendidikan islam non formal terbesar se kecamatan
            baleendah, kurang lebih mempunyai Santri berjumlah seribu.
          </p>
        </div>
      </div>
      <h3>VISI</h3>
      <p style="text-align: center">
        <strong
          >Membentuk generasi ilmiah, berakhlakul karimah, berwawasan syari’ah
        </strong>
      </p>
      <h3>MISI</h3>
      <ul>
        <li>
          Meningkatkan kualitas Sumber Daya Manusia (SDM) khususnya generasi
          muda melalui pendidikan yang bermuatan religi.
        </li>
        <li>
          Menanamkan sikap dan nilai-nilai Agama dalam berfikir dan bertindak.
        </li>
        <li>
          Mengembangkan bakat, potensi dan kemampuan khususnya bagi generasi
          muda.
        </li>
        <li>
          Mendorong Partisipasi aktif segenap jamaah dan masyarakat pada umumnya
          dalam upaya mencapai tujuan pendidikan.
        </li>
      </ul>
      <br />
      <br />
      <p>
        Untuk mendukung Visi misi tersebut Madrasah Diniyah takmiliyah Al-Harus
        memiliki beberapa jenjang Pendidikan islam, yaitu taman kanak-kanak
        Alquran , taman Pendidikan Alquran, yang menjadi cikal bakal Pendidikan
        islam usia dini, selanjutnya Madrasah Diniyah Aliyah, Madrasah Diniyah
        Wustho dan Madrasah Diniyah Ulya. Sistem yang digunakan di Madrasah
        Diniyah takmiliyah Al-Harus yaitu mengombinasikan antara kurikulum
        salafiyah atau sistem pembelajaran berbasis tradisi pesantren dan
        kurikulum yang di susun oleh kementrian agama, maksudnya dengan
        menambahkan mata pelajaran kepada santri yaitu berupa mempelajari kitab
        kuning. kegiatan belajar mengajar yang berada di Yayasan Pendidikan
        islam alharus, di mulai dari pagi,sore dan malam.
      </p>
    </section>
    <!-- Section Madrasah End -->
@endsection