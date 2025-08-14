@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
  <h2>Edit Data Transaksi</h2>

  <form action="{{ route('transaksi.update', $transaksi->id_transaksi) }}" method="POST">
    @csrf
    @method('PUT')

    <!-- ID Transaksi (hidden) -->
    <input type="hidden" name="id_transaksi" value="{{ $transaksi->id_transaksi }}">

     <div class="mb-3">
      <label for="nama_siswa" class="form-label">Nama Siswa</label>
      <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="{{ $transaksi->nama_siswa }}" required>
    </div>

    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $transaksi->tanggal }}" required>
    </div>

    <div class="mb-3">
      <label for="menu" class="form-label">Menu</label>
      <input type="text" name="menu" id="menu" class="form-control" value="{{ $transaksi->menu }}" required>
    </div>

    <div class="mb-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $transaksi->jumlah }}" required>
    </div>

    <div class="mb-3">
      <label for="total_harga" class="form-label">Total Harga</label>
      <input type="number" name="total_harga" id="total_harga" class="form-control" value="{{ $transaksi->total_harga }}" required>
    </div>

    <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <select name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
            <option value="">-- Pilih Metode --</option>
            <option value="Tunai">Tunai</option>
            <option value="Transfer">Transfer</option>
            <option value="QRIS">QRIS</option>
            <option value="E-Wallet">E-Wallet</option>
        </select>
    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
    <a href="/transaksi" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
