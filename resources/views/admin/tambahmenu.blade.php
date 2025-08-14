@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
  <h2>Tambah Menu Kantin</h2>
  <form action="{{ route('menu.store')}}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="nama_menu" class="form-label">Nama Menu</label>
      <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Contoh: Nasi Goreng" required>
    </div>

      <div class="mb-3">
      <label for="kategori" class="form-label">Kategori</label>
     <input type="text" class="form-control" id="kategori" name="kategori"  required>
      </select>
    </div>

    <div class="mb-3">
      <label for="harga" class="form-label">Harga (Rp)</label>
      <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 10000" required>
    </div>
    <div class="mb-3">
      <label for="stok" class="form-label">stok </label>
      <input type="number" class="form-control" id="stok" name="stok" placeholder="Contoh: 1" required>
    </div>



    <button type="submit" class="btn btn-success">Tambah Menu</button>
    <a href="/menu" class="btn btn-secondary">Kembali</a>
  </form>
@endsection
