<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardFarmasiController extends Controller
{
    public function index()
    {
        // Daftar menu dengan tautan dinamis
        $menuItems = [
            'Farmasi' => 'farmasi',
            'Obat' => 'obat',
            'Pasien' => 'pasien',
            'Rekam Medis' => 'rekam-medis',
            'Tindakan' => 'tindakan'
        ];

        // Memuat tampilan dashboard farmasi dengan data menuItems
        return view('index')->with('menuItems', $menuItems);
    }

    public function showPage($page)
    {
        // Memeriksa apakah halaman yang diminta termasuk dalam daftar halaman yang diizinkan
        $allowedPages = ['farmasi', 'obat', 'pasien', 'rekam-medis', 'tindakan'];

        if (in_array($page, $allowedPages)) {
            // Memuat tampilan yang sesuai (misalnya, farmasi.blade.php, obat.blade.php, dsb.)
            return view($page);
        } else {
            // Halaman tidak ditemukan, redirect ke halaman dashboard farmasi
            return redirect()->route('dashboard.farmasi');
        }
    }
}
