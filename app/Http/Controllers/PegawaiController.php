<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource
    */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('admin.pegawai',compact('pegawai') );
    }

    public function create()
    {
        $pegawai = Pegawai::all();
        return view('admin.tambahpegawai',compact('pegawai'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required|string|max:100',
        //     'jabatan' => 'required|string|max:50',
        //     'jenis_kelamin' => 'required|in:L,P',
        //     'no_hp' => 'required|string|max:15',
        // ]);
        // dd($request->all());


        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit(string $id_pegawai)
    {
        $pegawai = Pegawai::findOrFail($id_pegawai);
        return view('admin.editpegawai', compact('pegawai'));
    }

    public function update(Request $request, string $id_pegawai)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:L,P',
            'no_hp' => 'required|string|max:15',
        ]);


        $pegawai = Pegawai::where('id_pegawai',$id_pegawai)->update([
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'no_hp'=>$request->no_hp,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy(string $id_pegawai)
    {
        $pegawai = Pegawai::findOrFail($id_pegawai);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}
