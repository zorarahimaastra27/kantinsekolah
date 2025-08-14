@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
  <h2>Edit Menu Kantin</h2>
  <form action="{{ route('menu.update', $menu->id_menu) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- ID menu disimpan sebagai input tersembunyi -->
    <input type="hidden" name="id" value="{{ $menu->id }}">

    <div class="mb-3">
      <label for="nama_menu" class="form-label">Nama Menu</label>
      <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $menu->nama_menu }}" required>
    </div>

    <div class="mb-3">
      <label for="kategori" class="form-label">Kategori</label>
      <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $menu->kategori }}" required>
    </div>

    <div class="mb-3">
      <label for="harga" class="form-label">Harga (Rp)</label>
      <input type="number" class="form-control" id="harga" name="harga" value="{{ $menu->harga }}" required>
    </div>

    <div class="mb-3">
      <label for="stok" class="form-label">Stok</label>
      <input type="number" class="form-control" id="stok" name="stok" value="{{ $menu->stok }}" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="/menu" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
