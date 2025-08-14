@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
  <h2>Edit Kategori Kantin</h2>
  <form action="{{ route('kategorimenu.update', $kategorimenu->id_kategorimenu) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- ID menu disimpan sebagai input tersembunyi -->
    <input type="hidden" name="id_kategorimenu" value="{{ $kategorimenu->id_kategorimenu }}">

    <div class="mb-3">
      <label for="nama_kategori" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategorimenu->nama_kategori }}" required>
    </div>

    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $kategorimenu->deskripsi }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="/kategorimenu" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
