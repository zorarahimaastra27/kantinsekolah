@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2>Tambah Transaksi</h2>
    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="menu" class="form-label">Menu</label>
            <input type="name" name="menu" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="total_harga" class="form-label">Total Harga (Rp)</label>
            <input type="number" name="total_harga" class="form-control" required min="0">
        </div>


        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/transaksi" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
