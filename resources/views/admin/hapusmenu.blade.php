@extends('layouts.admin')

@section('title', 'Hapus Menu')

@section('content')
<div class="container mt-5">
    <h3>Konfirmasi Hapus Menu</h3>
    <div class="alert alert-danger">
        <p>Apakah kamu yakin ingin menghapus menu berikut?</p>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nama Menu</th>
            <td>{{ $menu->nama_menu }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $menu->kategori->nama_kategori ?? '-' }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp{{ number_format($menu->harga, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $menu->stok }}</td>
        </tr>
    </table>

    <form action="{{ route('menu.destroy', $menu->id_menu) }}" method="POST">
        @csrf
        @method('DELETE')

        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Batal</a>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection
