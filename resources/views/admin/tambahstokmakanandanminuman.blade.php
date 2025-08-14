@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2>Tambah Data Stok Makanan dan Minuman</h2>
    <form action="{{ route('stokmakanandanminuman.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Makanan dan Minuman</label>
            <input type="text" name="nama_makanan_dan_minuman" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Makanan Berat">Makanan Berat</option>
                <option value="Makanan Ringan">Makanan Ringan</option>
                <option value="Minuman">Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Contoh: porsi, botol, bungkus" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/tambahstokmakanandanminuman" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
