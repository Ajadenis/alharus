<nav class="navbar">
      <a href="{{ route('home') }}" class="navbar-logo"
        ><img src="{{ asset('images/logo-alharus.png') }}" />MDT Al-Harus</a
      >

      <div class="navbar-nav">
        <a href="{{ route('home') }}">Home</a>
        <div class="dropdown">
          <a href="#">Profil</a>
          <div class="dropdown-content">
            <a href="{{ route('profil.madrasah') }}">Madrasah</a>
            <a href="{{ route('profil.guru') }}">Guru</a>
            <a href="{{ route('profil.isma') }}">ISMA</a>
          </div>
        </div>
        <a href="{{ route('program-unggulan.index') }}">Program Unggulan</a>
        <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
        <a href="{{ route('fasilitas.index') }}">Fasilitas</a>
      </div>

      <div class="navbar-extra">
        <img src="{{ asset('images/logo-alharus.png') }}" />
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>
    </nav>