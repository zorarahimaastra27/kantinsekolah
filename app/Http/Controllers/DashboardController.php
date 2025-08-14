<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $totalMenu = Menu::count();
        $totalPembeli = Pembeli::count();
        $transaksiHariIni = Transaksi::whereDate('created_at', $today)->count();
        $pendapatanHariIni = Transaksi::whereDate('created_at', $today)->sum('total_harga');

        // Data grafik
        $labelHari = [];
        $jumlahPenjualan = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $labelHari[] = $date->format('l');
            $jumlahPenjualan[] = Transaksi::whereDate('created_at', $date)->sum('total_harga');
        }

        return view('admin.dashboard', compact(
            'totalMenu', 'totalPembeli', 'transaksiHariIni',
            'pendapatanHariIni', 'labelHari', 'jumlahPenjualan'
        ));
    }
}
