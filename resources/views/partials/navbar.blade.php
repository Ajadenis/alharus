<nav class="navbar">
      <a href="{{ asset('/') }}" class="navbar-logo"
        ><img src="{{ asset('images/logo-alharus.png') }}" />MDT Al-Harus</a
      >

      <div class="navbar-nav">
        <a href="{{ route('home') }}">Home</a>
        <div class="dropdown">
          <a href="#">Profil</a>
          <div class="dropdown-content">
            <a href="{{ route('profil.madrasah') }}">Madrasah</a>
            <a href="./views/guru.html">Guru</a>
            <a href="./views/isma.html">ISMA</a>
          </div>
        </div>
        <a href="./views/unggul.html">Program Unggulan</a>
        <a href="./views/kegiatan.html">Kegiatan</a>
        <a href="./views/fasilitas.html">Fasilitas</a>
      </div>

      <div class="navbar-extra">
        <<img src="{{ asset('images/logo-alharus.png') }}" />
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>