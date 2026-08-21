<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

    $user = Auth::user();
        // Data untuk dashboard
        $totalKegiatan = Kegiatan::count();
        $totalAktif = Kegiatan::where('is_active', true)->count();
        $totalNonaktif = Kegiatan::where('is_active', false)->count();
        $totalViews = Kegiatan::sum('views');
        
        $kegiatanTerbaru = Kegiatan::latest()->limit(5)->get();
        
        $kategoriList = Kegiatan::select('kategori')
                                ->distinct()
                                ->whereNotNull('kategori')
                                ->pluck('kategori');
        
        $totalKategori = $kategoriList->count();
        
        $kegiatanTahunIni = Kegiatan::whereYear('tanggal', date('Y'))->count();

        return view('admin.dashboard', compact(
            'totalKegiatan',
            'totalAktif',
            'totalNonaktif',
            'totalViews',
            'kegiatanTerbaru',
            'kategoriList',
            'totalKategori',
            'kegiatanTahunIni'
        ));
    }
}