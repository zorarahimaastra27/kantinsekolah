<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StokMakananDanMinuman;

class StokMakananDanMinumanController extends Controller
{
    /**
     * Menampilkan semua data stok barang.
     */
    public function index()
    {
        $stokmakanandanminuman = StokMakananDanMinuman::all();
        return view('admin.stokmakanandanminuman', compact('stokmakanandanminuman'));
    }

    /**
     * Menampilkan form tambah stok barang.
     */
    public function create()
    {
        $stokmakanandanminuman = StokMakananDanMinuman::all();
        return view('admin.tambahstokmakanandanminuman');
    }

    /**
     * Simpan data stok barang baru.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_makanan_dan_minuman' => 'required|string|max:100',
        //     'kategori' => 'required|string|max:50',
        //     'jumlah' => 'required|integer|min:0',
        //     'satuan' => 'required|string|max:20',
        // ]);
        // dd($request->all());

        StokMakananDanMinuman::create($request->all());

        return redirect()->route('stokmakanandanminuman.index')->with('success', 'Stok makanan dan minuman berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $stokmakanandanminuman = StokMakananDanMinuman::findOrFail($id);
        return view('Stokmakanandanminuman.show', compact('stokmakanandanminuman'));
    }


    /**
     * Menampilkan form edit stok makanan dan minuman.
     */
    public function edit($id)
    {
        $stokmakanandanminuman = StokMakananDanMinuman::findOrFail($id);
        return view('admin.editstokmakanandanminuman', compact('stokmakanandanminuman'));
    }

    /**
     * Simpan perubahan data stok makanan dan minuman.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_makanan_dan_minuman' => 'required|string|max:100',
            'kategori' => 'required|string|max:50',
            'jumlah' => 'required|integer|min:0',
            'satuan' => 'required|string|max:20',
        ]);

        $stokmakanandanminuman = StokMakananDanMinuman::findOrFail($id);
        $stokmakanandanminuman->update($request->all());

        return redirect()->route('stokmakanandanminuman.index')->with('success', 'Stok makanandanminuman berhasil diperbarui.');
    }

    /**
     * Menghapus data stok makanan dan minuman.
     */
    public function destroy($id)
    {
        $stokmakanandanminuman = StokMakananDanMinuman::findOrFail($id);
        $stokmakanandanminuman->delete();

        return redirect()->route('stokmakanandanminuman.index')->with('success', 'Stok makanan dan minuman berhasil dihapus.');
    }
}
