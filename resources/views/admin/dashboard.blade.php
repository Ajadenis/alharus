
@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')
@section('page-title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
@endpush

@section('content')
<div class="dashboard-wrapper">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-text">
            <h2>Selamat Datang, {{ auth()->user()->name ?? 'Admin' }}! 👋</h2>
            <p>Berikut adalah ringkasan data kegiatan MDT Al-Harus</p>
        </div>
        <div class="welcome-date">
            <i class="bi bi-calendar3"></i>
            {{ now()->locale('id')->isoFormat('dddd, D MMMM Y') }}
        </div>
    </div>

    <!-- Statistik Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon blue">
                <i class="bi bi-newspaper"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalKegiatan ?? 0 }}</h3>
                <p>Total Kegiatan</p>
                <span class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 12%
                </span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon green">
                <i class="bi bi-check-circle"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalAktif ?? 0 }}</h3>
                <p>Kegiatan Aktif</p>
                <span class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 8%
                </span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon red">
                <i class="bi bi-x-circle"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalNonaktif ?? 0 }}</h3>
                <p>Kegiatan Nonaktif</p>
                <span class="stat-change negative">
                    <i class="bi bi-arrow-down"></i> 3%
                </span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon yellow">
                <i class="bi bi-eye"></i>
            </div>
            <div class="stat-info">
                <h3>{{ number_format($totalViews ?? 0) }}</h3>
                <p>Total Dilihat</p>
                <span class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 25%
                </span>
            </div>
        </div>
    </div>

    <!-- Kegiatan Terbaru & Quick Actions -->
    <div class="dashboard-grid">
        <!-- Kegiatan Terbaru -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3><i class="bi bi-clock-history"></i> Kegiatan Terbaru</h3>
                <a href="{{ route('admin.kegiatan.index') }}" class="view-all">
                    Lihat Semua <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="card-body">
                @forelse($kegiatanTerbaru ?? [] as $item)
                    <div class="recent-item">
                        <div class="recent-image">
                            <img src="{{ asset('images/' . $item->gambar) }}" alt="{{ $item->judul }}">
                        </div>
                        <div class="recent-info">
                            <h4>{{ Str::limit($item->judul, 40) }}</h4>
                            <div class="recent-meta">
                                <span class="recent-date">
                                    <i class="bi bi-calendar3"></i>
                                    {{ $item->tanggal ? $item->tanggal->format('d M Y') : '-' }}
                                </span>
                                <span class="recent-status {{ $item->is_active ? 'active' : 'inactive' }}">
                                    {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="empty-state-admin">
                        <i class="bi bi-inbox"></i>
                        <p>Belum ada kegiatan terbaru</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3><i class="bi bi-lightning"></i> Aksi Cepat</h3>
            </div>
            <div class="card-body">
                <div class="quick-actions">
                    <a href="{{ route('admin.kegiatan.create') }}" class="quick-action">
                        <i class="bi bi-plus-circle"></i>
                        <div>
                            <h4>Tambah Kegiatan</h4>
                            <p>Tambahkan kegiatan baru</p>
                        </div>
                    </a>
                    <a href="{{ route('admin.kegiatan.index') }}" class="quick-action">
                        <i class="bi bi-list-ul"></i>
                        <div>
                            <h4>Kelola Kegiatan</h4>
                            <p>Lihat dan edit semua kegiatan</p>
                        </div>
                    </a>
                    <a href="{{ route('home') }}" class="quick-action" target="_blank">
                        <i class="bi bi-globe"></i>
                        <div>
                            <h4>Lihat Website</h4>
                            <p>Buka website publik</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Tambahan -->
    <div class="info-grid">
        <div class="info-card">
            <div class="info-icon">
                <i class="bi bi-tags"></i>
            </div>
            <div class="info-content">
                <h4>Kategori Kegiatan</h4>
                <p>{{ $totalKategori ?? 0 }} Kategori</p>
                <div class="kategori-tags">
                    @foreach($kategoriList ?? [] as $kategori)
                        <span class="tag">{{ $kategori }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="info-card">
            <div class="info-icon">
                <i class="bi bi-calendar-range"></i>
            </div>
            <div class="info-content">
                <h4>Kegiatan Tahun Ini</h4>
                <p>{{ $kegiatanTahunIni ?? 0 }} Kegiatan</p>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ min(100, ($kegiatanTahunIni ?? 0) * 10) }}%"></div>
                </div>
                <span class="info-sub">Target: 20 kegiatan/tahun</span>
            </div>
        </div>
    </div>
</div>
@endsection