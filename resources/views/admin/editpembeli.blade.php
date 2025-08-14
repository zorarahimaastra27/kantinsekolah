@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
  <h2>Edit Data Pembeli</h2>

  <form action="{{ route('pembeli.update', $pembeli->id) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- ID Pembeli (hidden) -->
    <input type="hidden" name="id_pembeli" value="{{ $pembeli->id }}">

    <div class="mb-3">
      <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
      <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" required>
    </div>

    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $pembeli->kelas }}" required>
    </div>

    <div class="mb-3">
      <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
      <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="L" {{ $pembeli->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ $pembeli->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
      <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="form-control" value="{{ $pembeli->tanggal_pembelian }}">
    </div>

    <div class="mb-3">
      <label for="nama_menu" class="form-label">Nama Menu</label>
      <input type="text" name="nama_menu" id="nama_menu" class="form-control" value="{{ $pembeli->nama_menu }}">
    </div>
    
    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="text" name="jumlah" id="jumlah" class="form-control" value="{{ $pembeli->jumlah }}">
    </div>

    <div class="mb-3">
      <label for="total_belanja" class="form-label">Total Belanja</label>
      <input type="number" name="total_belanja" id="total_belanja" class="form-control" value="{{ $pembeli->total_belanja }}">
    </div>

    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    <a href="/pembeli" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
