<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pembeli;
use App\Models\Menu;

class TransaksiController extends Controller
{
    /**
     * Menampilkan semua transaksi.
     */
    public function index()
    {
        $transaksi = Transaksi::with('pembeli')->get();
        return view('admin.transaksi', compact('transaksi'));
    }

    /**
     * Menampilkan form tambah transaksi.
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        $menu = Menu::all();
        return view('admin.tambahtransaksi');
    }

    /**
     * Simpan data transaksi baru.
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'id_pembeli'        => 'required|exists:pembeli,id',
        //     'menu'              => 'required|exists:strinng',
        //     'menu'              => 'required|exists:menu,id',
        //     'jumlah'            => 'required|numeric|min:1',
        //     'total_harga'       => 'required|numeric|min:0',
        //  ]);
        // dd($request->all());


        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit transaksi.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $pembeli = Pembeli::all();
        $menu = Menu::all();
        return view('admin.edittransaksi', compact('transaksi', 'pembeli'));
    }

    /**
     * Simpan update transaksi.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pembeli'       => 'required|string|max:100',
            'menu'              => 'required|string|max:100',
            'jumlah'            => 'required|numeric|min:1',
            'total_harga'       => 'required|numeric|min:0',
        ]);


        $transaksi = Transaksi::where('id_transaksi', $id)->update([
            'id_pembeli'        => $request->id_pembeli,
            'menu'              => $request->menu,
            'jumlah'            => $request->jumlah,
            'total_harga'       => $request->total_harga,
        ]);


        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Hapus data transaksi.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
