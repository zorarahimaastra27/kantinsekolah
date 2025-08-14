@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2>Tambah Kategori Menu</h2>
    <form action="{{ route('kategorimenu.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/kategorimenu" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
