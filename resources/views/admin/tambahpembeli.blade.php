@extends('admin.layouts.index')
@section('content')
<div class="container mt-5">
    <h2>Form Tambah Pembeli</h2>
    <form action="{{route('pembeli.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_pembeli" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
            <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" required>
        </div>

      

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/pembeli" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
