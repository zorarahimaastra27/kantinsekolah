@extends('admin.layouts.index')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Data Transaksi Kantin Sekolah</h2>



    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pembeli</th>
                <th>Tanggal</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Metode_Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $index => $item)
                <tr>

                    <td>{{ $item->id_transaksi }}</td>
                    <td>{{ $item->nama_pembeli }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->menu }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->total_harga }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>

                    <td>
                        <a href="{{ route('transaksi.edit', $item->id_transaksi) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('transaksi.destroy', $item->id_transaksi) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="{{ url('dashboard') }}" class="btn btn-secondary">⬅️ Kembali ke Dashboard</a>
    </div>
</div>

@endsection
