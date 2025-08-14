@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2>Edit Stok Makanan dan Minuman</h2>

    <form action="{{ route('stokmakanandanminuman.update', $stokmakanandanminuman->id_makanan_dan_minuman)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_makanan_dan_minuman" class="form-label">Nama Makanan dan Minuman</label>
            <input type="text" class="form-control" id="nama" name="nama_makanan_dan_minuman" value="{{ old('nama', $stokmakanandanminuman->nama_makanan_dan_minuman) }}" required>
        </div>


        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori', $stokmakanandanminuman->kategori) }}" required>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', $stokmakanandanminuman->stokmakanandanminuman) }}" required>
        </div>

        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="satuan" name="satuan" value="{{ old('satuan', $stokmakanandanminuman->satuan) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href='/stokmakanandanminuman' class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
