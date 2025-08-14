<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use App\Models\Transaksi;

class PembeliController extends Controller
{
    /**
     * Menampilkan daftar pembeli.
     */
    public function index()
    {
        $pembeli = Pembeli::with('transaksi')->get();
        return view('admin.pembeli', compact('pembeli'));
    }

    /**
     * Menampilkan form tambah pembeli.
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        return view('admin.tambahpembeli');
    }

    /**
     * Simpan data pembeli baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:100',
            'tanggal_pembelian' => 'required|date',
            'nama_menu' => 'required|string|max:100',
            'jumlah' => 'required|integer|min:1',
            'total_belanja' => 'required|numeric|min:0',
        ]);

        // dd($request->all());

       // 1. Simpan ke tabel pembeli dan ambil ID-nya
       $pembeli = Pembeli::create([
            'nama_pembeli' => $request->nama_pembeli,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'nama_menu' => $request->nama_menu,
            'jumlah' => $request->jumlah,
            'total_belanja' => $request->total_belanja,

       ]);

       // 2. Simpan ke tabel transaksi
        Transaksi::create([
            'pembeli_id' => $pembeli->id,
            'nama_pembeli' => $request->nama_pembeli,
            'tanggal' => $request->tanggal_pembelian,
            'total_harga' => $request->total_belanja,
            'menu' => $request->nama_menu,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('pembeli.index')->with('success', 'Data pembeli berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }


    /**
     * Menampilkan form edit pembeli.
     */
    public function edit(string $id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('admin.editpembeli', compact('pembeli'));
    }

    /**
     * Menyimpan update data pembeli.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:100',
            'tanggal_pembelian' => 'required|date',
            'nama_menu' => 'required|string|max:100',
            'jumlah' => 'required|integer|min:1',
            'total_belanja' => 'required|numeric',
        ]);

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->update([
            'nama_pembeli' => $request->nama_pembeli,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'nama_menu' => $request->nama_menu,
            'jumlah' => $request->jumlah,
            'total_belanja' => $request->total_belanja,
        ]);

        $transaksi = Transaksi::where('pembeli_id', $pembeli->id)->first();
        if ($transaksi) {
            $transaksi->update([
                'nama_pembeli' => $request->nama_pembeli,
                'tanggal' => $request->tanggal_pembelian,
                'menu' => $request->nama_menu,
                'jumlah' => $request->jumlah,
                'total_belanja' => $request->total_belanja,
            ]);
        }

        return redirect()->route('pembeli.index')->with('success', 'Data pembeli berhasil diperbarui.');
    }

    /**
     * Menghapus data pembeli.
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();

        return redirect()->route('pembeli.index')->with('success', 'Data pembeli berhasil dihapus.');
    }
}
