<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Transaksi;
use App\Models\TransaksiPembeli;

class TransaksiPembeliController extends Controller
{
    // Tampilkan semua transaksi pembeli
    public function index()
    {
        $data = TransaksiPembeli::with(['pembeli', 'transaksi'])->get();
        return view('admin.transaksipembeli', compact('data'));
    }

    // Form tambah transaksi pembeli
    public function create()
    {
        $pembeli = Pembeli::all();
        $transaksi = Transaksi::all();
        return view('transaksipembeli.create', compact('pembeli', 'transaksi'));
    }

    // Simpan transaksi pembeli
    public function store(Request $request)
    {
        $request->validate([
            'id_pembeli' => 'required|exists:pembeli,id_pembeli',
            'id_transaksi' => 'required|exists:transaksi,id_transaksi',
            'id_menu' => 'required|exists:menu,id_menu',
            'harga_satuan' => 'required|numeric|min:0',
        ]);

        $total_harga = $request->qty * $request->harga_satuan;

        TransaksiPembeli::create([
            'id_pembeli' => $request->id_pembeli,
            'id_transaksi' => $request->id_transaksi,
            'id_menu' => $request->id_menu,
            'harga_satuan' => $request->harga_satuan,
            'total_harga' => $total_harga,
        ]);

        return redirect()->route('transaksipembeli.index')
                         ->with('success', 'Transaksi pembeli berhasil ditambahkan');
    }

    // Hapus transaksi pembeli
    public function destroy($id)
    {
        $transaksiPembeli = TransaksiPembeli::findOrFail($id);
        $transaksiPembeli->delete();

        return redirect()->route('transaksipembeli.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}
