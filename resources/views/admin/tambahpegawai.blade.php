@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2>Tambah Data Pegawai</h2>
    <form action="{{ route('pegawai.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Pegawai</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control">
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control"> required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
        <div class="mb-3">
            <label>No. HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/pegawai" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
