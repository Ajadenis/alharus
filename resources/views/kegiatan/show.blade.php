@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/kegiatan.css') }}">
@endpush

@section('title', $item['judul'] . ' - MDT Al-Harus')
@section('description', Str::limit($item['ringkasan'], 150))

@section('content')
    <div class="kegiatan-wrapper">
        <!-- KONTEN UTAMA -->
        <section class="kegiatan-detail">
            <!-- Breadcrumb -->
            <nav class="breadcrumb">
                <a href="{{ route('home') }}">Beranda</a>
                <span class="separator">/</span>
                <a href="{{ route('kegiatan.index') }}">Kegiatan</a>
                <span class="separator">/</span>
                <span class="current">{{ $item['judul'] }}</span>
            </nav>

            <article class="detail-content">
                <!-- Badge Kategori -->
                @if(isset($item['kategori']))
                    <span class="badge">{{ $item['kategori'] }}</span>
                @endif

                <h1>{{ $item['judul'] }}</h1>

                <!-- Meta Info (Tanggal & Views) -->
                <div class="meta-info">
                    @if(isset($item['tanggal']))
                        <span class="date">
                            <i class="bi bi-calendar3"></i> 
                            {{ \Carbon\Carbon::parse($item['tanggal'])->format('d F Y') }}
                        </span>
                    @endif
                    @if(isset($item['views']))
                        <span class="views">
                            <i class="bi bi-eye"></i> 
                            {{ $item['views'] }} dilihat
                        </span>
                    @endif
                </div>

                <!-- Gambar -->
                <div class="detail-image">
                    <img 
                        src="{{ asset('images/' . $item['gambar']) }}" 
                        alt="{{ $item['judul'] }}"
                        onerror="this.src='{{ asset('images/default-kegiatan.jpg') }}'"
                    >
                </div>

                <!-- Deskripsi Lengkap -->
                <div class="detail-description">
                    <p>{{ $item['deskripsi'] }}</p>
                </div>

                <!-- Tombol Kembali -->
                <a href="{{ route('kegiatan.index') }}" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar Kegiatan
                </a>
            </article>
        </section>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <!-- Kegiatan Terbaru -->
            <div class="sidebar-widget terbaru-widget">
                <h3>Kegiatan Terbaru</h3>
                <ul class="terbaru-list">
                    @forelse($kegiatanTerbaru as $itemTerbaru)
                        @if($itemTerbaru['slug'] != $item['slug'])
                            <li>
                                <a href="{{ route('kegiatan.show', $itemTerbaru['slug']) }}">
                                    <div class="terbaru-item">
                                        <div class="terbaru-thumb">
                                            <img 
                                                src="{{ asset('images/' . $itemTerbaru['gambar']) }}" 
                                                alt="{{ $itemTerbaru['judul'] }}"
                                                onerror="this.src='{{ asset('images/default-kegiatan.jpg') }}'"
                                            >
                                        </div>
                                        <div class="terbaru-info">
                                            <h4>{{ Str::limit($itemTerbaru['judul'], 30) }}</h4>
                                            <span class="terbaru-date">
                                                <i class="bi bi-calendar3"></i> 
                                                {{ \Carbon\Carbon::parse($itemTerbaru['tanggal'])->format('d M Y') }}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        @endif
                    @empty
                        <li class="empty-sidebar">Belum ada kegiatan terbaru</li>
                    @endforelse
                </ul>
            </div>

            <!-- Kegiatan Terkait (Kategori Sama) -->
            @if(isset($kegiatanTerkait) && count($kegiatanTerkait) > 0)
                <div class="sidebar-widget terkait-widget">
                    <h3>Kegiatan Terkait</h3>
                    <ul class="terkait-list">
                        @foreach($kegiatanTerkait as $itemTerkait)
                            <li>
                                <a href="{{ route('kegiatan.show', $itemTerkait['slug']) }}">
                                    <div class="terkait-item">
                                        <h4>{{ Str::limit($itemTerkait['judul'], 40) }}</h4>
                                        <span class="terkait-date">
                                            <i class="bi bi-calendar3"></i> 
                                            {{ \Carbon\Carbon::parse($itemTerkait['tanggal'])->format('d M Y') }}
                                        </span>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Tombol Lihat Semua Kegiatan -->
            <div class="sidebar-widget">
                <a href="{{ route('kegiatan.index') }}" class="btn-all-kegiatan">
                    <i class="bi bi-grid-3x3-gap-fill"></i> Lihat Semua Kegiatan
                </a>
            </div>
        </aside>
    </div>
@endsection