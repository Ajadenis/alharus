@extends('layouts.app')
@push('index')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush
@section('content')
    <!-- section hero start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Dari Santri Untuk Santri</h1>
        <p>Kreatif & Inovatif</p>
      </main>
    </section>
    <!-- section hero End -->

    <!-- Slideshow container -->
    <div class="slideshow">
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img src="{{ asset('images/kaulinan-barudak/Rerebonan/rebon-7.jpg') }}" />
      </div>

      <div class="mySlides fade">
        <img src="{{ asset('images/kaulinan-barudak/Sapintrong/sapintrong-4.jpg') }}" />
      </div>

      <div class="mySlides fade">
        <img src="{{ asset('images/isra-miraj/15.jpg') }}" />
      </div>
    </div>

    <!-- Section Main Start -->
    <section id="main" class="main">
      <h2>Berita Terbaru</h2>
      <div class="row">
        <div class="main-img">
          <img src="{{ asset('images/isra-miraj/17.jpg') }}" alt="Berita" />
        </div>
        <div class="content">
          <h3>Isra Mi'raj</h3>
          <p>
            <strong>Isra Mi'raj</strong> adalah peristiwa penting dalam sejarah
            Islam, yang terjadi pada malam 27 Rajab tahun ke-12 kenabian Nabi
            Muhammad SAW. <strong>Isra Miraj</strong> terjadi ketika Nabi
            Muhammad SAW sedang berada di Masjidil Haram di Mekkah. Dalam
            peristiwa ini, Nabi Muhammad melakukan perjalanan malam dari
            Masjidil Haram ke Masjidil Aqsa di Yerusalem dengan menggunakan
            Buraq. Setelah sampai di Masjidil Aqsa, Nabi Muhammad SAW
            melanjutkan perjalanan ke <strong>Sidratul Muntaha</strong> yang
            berada di lapisan langit ke tujuh dan bertemu dengan para Nabi
            terdahulu pada setiap lapisan yang dilewati.
          </p>
          <a href="../kegiatan/isra.html" class="cta">Lebih banyak </a>
        </div>
      </div>
      <div class="row">
        <div class="main-img">
          <img src="{{ asset('images/hari-santri/santri-5.jpg') }}" alt="Berita" />
        </div>
        <div class="content">
          <h3>Hari Santri x Sambara Sunda</h3>
          <p>
            Jati diri Sunda nu ngagabungkeun kakayaan rasa
            <strong>(sambara)</strong> jeung kaéndahan tradisi. Ngahadirkeun
            suasana haneut tur oténtik, pikeun ngajaga budaya urang tetep
            <i>nyantika</i> <strong>(éndah)</strong> jeung <i>dinamis</i>
            <strong>(hirup)</strong>.
          </p>
          <p>
            Wadah panggelaran seni jeung budaya tatar Sunda. Léngkah nyata
            ngamumulé warisan karuhun ku cara <i>wani tandang</i> jeung
            <i>wani tanding</i> dina kaéndahan tradisi jeung kréasi.
          </p>
          <a href="./kegiatan/sunda.html" class="cta">Lebih banyak </a>
        </div>
      </div>
    </section>
    <!-- Section Main End -->
@endsection

@push ('slideshow') 
<script src="{{ asset('js/slideshow.js') }}"></script>
@endpush