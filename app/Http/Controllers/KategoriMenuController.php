<?php

namespace App\Http\Controllers;

use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorimenu = KategoriMenu::all();
        return view('admin.kategorimenu', compact('kategorimenu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategorimenu = KategoriMenu::all();
        return view('admin.tambahkategorimenu', compact('kategorimenu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_kategori' => 'required|string|max:100',
        //     'deskripsi' => 'nullable|string|max:255',
        // ]);
        // dd($request->all());

        KategoriMenu::create($request->all());

        return redirect()->route('kategorimenu.index')->with('success', 'Kategorimenu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategorimenu = KategoriMenu::findOrFail($id);
        return view('kategori_menu.show', compact('kategorimenu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategorimenu = KategoriMenu::findOrFail($id);
        return view('admin.editkategorimenu', compact('kategorimenu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'deskripsi' => 'required|string|max:100',
        ]);
       


         $kategorimenu = KategoriMenu::where('id_kategorimenu', $id)->update([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('kategorimenu.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = KategoriMenu::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategorimenu.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
